<?php

namespace App\Http\Controllers\Representante\PasarelaPagos\Paymentez;

use App\Models\cob_voucher;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CodigoOtp;
use Illuminate\Http\Request;
use App\Mail\PagoMailable;
use App\Models\cob_estado_cuenta;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\pay_tarjetas_agregadas;
use App\Models\User;

class verificarTarjetaController extends Controller
{
    public function verify(CodigoOtp $request, $transaction, $ruta){

        // try {

            $paymentez = paymentez();
            $cobro = Http::withHeaders([
                'Auth-Token' => auth_token()
            ])->POST($paymentez.'/v2/transaction/verify',[
                'transaction' => [
                    'id' => $transaction,
                ],
                'user' => [
                    'id' => Auth::user()->code_paymentez,
                ],
                'type' => "BY_OTP",
                'value' =>  $request->codigo,
                'more_info' => true,
            ]);

            if($ruta == "ruta_add_card"){
                if ($cobro['transaction']['status'] == "success" ){
                    return redirect()->route('guardar.tarjeta', [
                        $cobro['card']['bin'],
                        $cobro['card']['status'],
                        $cobro['card']['token'],
                        $cobro['card']['expiry_year'],
                        $cobro['card']['expiry_month'],
                        $cobro['card']['transaction_reference'],
                        $cobro['card']['type'],
                        $cobro['card']['number'],
                        $cobro['card']['origin'],
                    ]);
                    // return redirect()->route('paymentez.formaPago')->with('exito','Tarjeta añadida correctamente');
                }else{
                    return redirect()->route('paymentez.formaPago')->with('error','Error al momento de añadir la tarjeta');
                }

            }elseif($ruta == "ruta_buy"){

                $voucher = cob_voucher::where('transaction_reference','=',$transaction)->first();

                $voucher->transaction_reference = $cobro['transaction']['id'];
                $voucher->status_transaction = $cobro['transaction']['status'];
                $voucher->authorization_code = $cobro['transaction']['authorization_code'];
                $voucher->payment_date = $cobro['transaction']['payment_date'];
                $voucher->status_detail = $cobro['transaction']['status_detail'];
                $voucher->message = $cobro['transaction']['message'];
                $voucher->dev_reference = $cobro['transaction']['dev_reference'];
                $voucher->carrier_code = $cobro['transaction']['carrier_code'];
                $voucher->current_status = $cobro['transaction']['current_status'];
                $voucher->amount = $cobro['transaction']['amount'];
                $voucher->carrier = $cobro['transaction']['carrier'];
                $voucher->installments = $cobro['transaction']['installments'];

                if($cobro['transaction']['status'] == "pending"){
                    
                    $voucher->payment_method_type = null;
                    $voucher->installments_type = null;
                    $voucher->product_description = null;
                    $voucher->estado = "ERROR VERIFICACION";
                    $voucher->save();

                    $diferido = $voucher->diferido->cuota;
                    Mail::to(Auth::user()->email)->send(new PagoMailable($voucher, $diferido));
                    return redirect()->route('representante.home')->with('error','Transacción Fallida');

                }elseif($cobro['transaction']['status'] == "failure"){

                    $diferido = $voucher->diferido->cuota;
                    Mail::to(Auth::user()->email)->send(new PagoMailable($voucher, $diferido));
                    return redirect()->route('representante.home')->with('error','Transacción Fallida');

                }elseif($cobro['transaction']['status'] == "success"){
                    // $voucher->payment_method_type = $cobro['transaction']['payment_method_type'];
                    // $voucher->installments_type = $cobro['transaction']['installments_type'];
                    // $voucher->product_description = $cobro['transaction']['product_description'];
                    $voucher->estado = "COBRO EXITOSO";
                    $voucher->save();

                    $user = User::find(Auth::user()->id);
                    for($i = 0; $i < count($request->id); $i++){
                        if($request->saldos[$i] > 0){
                            $estado_cuenta_id = cob_estado_cuenta::find($request->id[$i]);
                            $fecha = Carbon::now();
                            $registro_cobro = DB::select('call registrar_cobro(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
                                $request->saldos[$i],
                                $estado_cuenta_id->id,
                                // 
                                $estado_cuenta_id->cob_cobro->id,
                                $estado_cuenta_id->id,
                                $voucher->id,
                                $user->representante->id,
                                $user->representante->persona->primer_nombre,
                                $fecha,
                                $estado_cuenta_id->estudiante_id,
                                $request->saldos[$i],
                                $voucher->dev_reference,
                                $estado_cuenta_id->cob_cobro->descripcion,
                            ]);
                        }
                    }

                    $diferido = $voucher->diferido->cuota;
                    Mail::to(Auth::user()->email)->send(new PagoMailable($voucher, $diferido));

                    return redirect()->route("paymentez.facture",[
                        $voucher->id,
                    ]);
                }else{
                    return back()->with('error','Error en la Verificación');
                }
            }else{
                return back()->with('error','error inesperado');
            }
        // } catch (\Exception $e) {
        //     $cobro->throwIf(
        //         \Log::info('Fallo',['error' => $cobro]),
        //     );
        //     \Log::debug('Fallo'. $e->getMessage());
        //     abort(404);
        // }
    }

    public function otp($transaction, $ruta, $saldos, $id, $tamano){

        if($ruta == "ruta_buy"){
            $saldos = json_decode($saldos);
            $id = json_decode($id);
        }
        return view('representante.pasarelaPagos.otp', compact('transaction','ruta','saldos','id','tamano'));
    }
}

