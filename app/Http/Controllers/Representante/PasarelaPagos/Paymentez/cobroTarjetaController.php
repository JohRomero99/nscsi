<?php

namespace App\Http\Controllers\Representante\PasarelaPagos\Paymentez;

use App\Models\cob_concepto_cobro;
use App\Models\cob_card_transaction;
use App\Models\cob_estado_cuenta;
use App\Models\cob_voucher;
use App\Models\nsc_cobros;
use App\Models\cob_cuota_diferida;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TerminosCondiciones;
use Illuminate\Http\Request;
use App\Mail\PagoMailable;
use App\Models\User;
use Illuminate\Support\Arr;
use Carbon\Carbon;

class cobroTarjetaController extends Controller
{
    public function paymentezBuy(TerminosCondiciones $request, $token){

        return $request->all();

        try {
            
            $saldos = $request->saldos; 
            for($i = 0; $i < count($request->id); $i++){
                $estado[$i] = cob_estado_cuenta::find($request->id[$i])->estado;
                if($estado[$i] == "cancelado"){
                    return redirect()->route("representante.home")->with("warnnig","Tu pago ya fue procesado!");
                }
            }
            for($i = 0; $i < count($request->id); $i++){
                if($saldos[$i] > 0){
                    $motivo[$i] = cob_estado_cuenta::find($request->id[$i])->cob_cobro->descripcion;
                }
            }
            $descripcion = collect($motivo)->implode(', ');
    
            $id = $request->id;
            $tamano = count($request->id);
            $user = User::find(Auth::user()->id);
    
            $taxable_amount = (float)$request->taxable_amount;
            $amount = (float)$request->amount;
            $vat = (float)$request->vat;
            $tax_percentage = (float)$request->tax_percentage;
            $num_cuota = (int)$request->numeroCuota;
    
            // Consulta API "COBRO CON TOKEN"
            $paymentez = paymentez();
            $cobro = Http::withHeaders([
                'Auth-Token' => auth_token()
            ])->POST($paymentez.'/v2/transaction/debit/',[
                'order' => [
                    'amount' => $amount,
                    'vat' => $vat,
                    'taxable_amount' => $taxable_amount,
                    'tax_percentage' => $tax_percentage,
                    'description' => $descripcion,
                    'dev_reference' =>  numero_factura(),
                    'installments' => $num_cuota,
                    'installments_type' => 2
                ],
                'user' => [
                    'id' => Auth::user()->code_paymentez,
                    'email' => Auth::user()->email
                ],
                'card' => [
                    'token' => $token,
                ]
            ]); 

            //Guardar diferido
            $diferido = new cob_cuota_diferida();
            $diferido->representante_id = $user->representante->id;
            if( $cobro['transaction']['installments_type'] == "Deferred with interest" ){
                $diferido->cob_tipo_diferido_id = 2;
            }elseif( $cobro['transaction']['installments_type'] == "Deferred without interest" ){
                $diferido->cob_tipo_diferido_id = 3;
            }elseif( $cobro['transaction']['installments_type'] == "Revolving credit"){
                $diferido->cob_tipo_diferido_id = 1;
            }
    
            if( $cobro['transaction']['installments'] == 3 ){
                $diferido->cob_num_cuota_id = 2;
            }elseif( $cobro['transaction']['installments'] == 6 ){
                $diferido->cob_num_cuota_id = 3;
            }elseif( $cobro['transaction']['installments'] == 9 ){    
                $diferido->cob_num_cuota_id = 4;
            }elseif( $cobro['transaction']['installments'] == 12 ){
                $diferido->cob_num_cuota_id = 5;
            }elseif( $cobro['transaction']['installments'] == 0 ){
                $diferido->cob_num_cuota_id = 1;
            }
    
            if(empty($num_cuota)){
                $diferido->cuota = 0.00;
            }else{
                $diferido->cuota = $amount / $cobro['transaction']['installments'];
            }
            $diferido->tipo_financiamiento = $request->tipoDiferido;
            $diferido->save();

            // Guardar Transaccion.
            $voucher = new cob_voucher();
            $voucher->representante_id = $user->representante->id;
            $voucher->cuota_id = $diferido->id;
            $voucher->transaction_reference = $cobro['transaction']['id'];
            $voucher->status_transaction = $cobro['transaction']['status'];
    
            if($cobro['transaction']['status'] == "pending" || $cobro['transaction']['status'] == "review"){
                $voucher->authorization_code = null;
            }else{
                $voucher->authorization_code = $cobro['transaction']['authorization_code'];
            }
            
            $voucher->payment_date = $cobro['transaction']['payment_date'];
            $voucher->status_detail = $cobro['transaction']['status_detail'];
            $voucher->message = $cobro['transaction']['message'];
            $voucher->payment_method_type = $cobro['transaction']['payment_method_type'];
            $voucher->dev_reference = $cobro['transaction']['dev_reference'];
            $voucher->carrier_code = $cobro['transaction']['carrier_code'];
            $voucher->product_description = $cobro['transaction']['product_description'];
            $voucher->current_status = $cobro['transaction']['current_status'];
            $voucher->amount = $cobro['transaction']['amount'];
            $voucher->carrier = $cobro['transaction']['carrier'];
            $voucher->installments = $cobro['transaction']['installments'];
            $voucher->installments_type = $cobro['transaction']['installments_type'];
            $voucher->save();
    
            // Guardar card.
            $card = new cob_card_transaction();
            $card->cob_voucher_id = $voucher->id;
            $card->bin = $cobro['card']['bin'];
            $card->status = $cobro['card']['status'];
            $card->token = $cobro['card']['token'];
            $card->expiry_year = $cobro['card']['expiry_year'];
            $card->expiry_month = $cobro['card']['expiry_month'];
            $card->type = $cobro['card']['type'];
            $card->number = $cobro['card']['number'];
            $card->save();
    
            $ruta = "ruta_buy";
            if($cobro['transaction']['status'] == "pending" || $cobro['transaction']['status'] == "review"){
    
                if ($cobro['transaction']['status'] == "pending") {
                    $voucher->estado = "COBRO PENDIENTE";
                    $voucher->save();
                }elseif ($cobro['transaction']['status'] == "review") {
                    $voucher->estado = "COBRO EN REVISION";
                    $voucher->save();
                }
                                
                $saldos = json_encode($saldos);
                $motivo = json_encode($motivo);
                $id = json_encode($id);
                $transaction_reference = $cobro['transaction']['id'];
                return redirect()->route('paymentez.otp', [
                    $transaction_reference,
                    $ruta,
                    $saldos,
                    $id,
                    $tamano
                ]);
    
            }elseif($cobro['transaction']['status'] == "success"){
    
                $voucher->estado = "COBRO EXITOSO";
                $voucher->save();
                for($i = 0; $i < count($request->id); $i++ ){
                    if( $saldos[$i] > 0 ){
                        $estado_cuenta_id = cob_estado_cuenta::find($request->id[$i]);
                        $fecha = Carbon::now();
                        $registro_cobro = DB::select('call registrar_cobro(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
                            $saldos[$i],
                            $estado_cuenta_id->id,
                            // 
                            $estado_cuenta_id->cob_cobro->id,
                            $estado_cuenta_id->id,
                            $voucher->id,
                            $user->representante->id,
                            $user->representante->persona->primer_nombre,
                            $fecha,
                            $estado_cuenta_id->estudiante_id,
                            $saldos[$i],
                            $voucher->dev_reference,
                            $motivo[$i],
                        ]);
                    }
                }
    
                for($i = 0; $i < count($request->id); $i++){
                    $datos[$i] = cob_estado_cuenta::find($request->id[$i]);
                }
    
                // $diferido = $voucher->diferido->cuota;
                // Mail::to(Auth::user()->email)->send(new PagoMailable($voucher, $diferido));
                return redirect()->route("paymentez.facture",[
                    $voucher->id,
                ]);
            }else{
                return back();
            }
        }catch (\Exception $e) {
            $cobro->throwIf(
                \Log::info('Fallo',['error' => $cobro]),
                // \Log::info('Fallo',['error' => $cardsList->throw()]),
            );
            \Log::debug('Fallo'. $e->getMessage());
            abort(404);
        }
    }
}
