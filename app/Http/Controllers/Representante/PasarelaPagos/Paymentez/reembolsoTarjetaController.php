<?php

namespace App\Http\Controllers\Representante\PasarelaPagos\Paymentez;

use App\Models\cob_voucher;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Mail\PagoMailable;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\EstudianteRepresentante;
use App\Models\Persona;

class reembolsoTarjetaController extends Controller
{
    public function paymenyhistory(){
        
        try {

            $cobro = cob_voucher::Where('estado','=','COBRO EXITOSO')->get();
            $reembolso = cob_voucher::Where('estado','=','REEMBOLSO EXITOSO')
                ->orWhere('estado','=','REEMBOLSO FALLIDO')    
                ->orWhere('estado','=','REEMBOLSO PENDIENTE')  
                ->get();
            return view('representante.pasarelaPagos.refound', compact('cobro','reembolso'));
            
        } catch (\Throwable $th) {
            return back()->with('error','error inesperado');
        }

    }

    public function refound($transaction_reference){

        try {
            $paymentez = paymentez();
            $refound = Http::withHeaders([
                'Auth-Token' => auth_token()
            ])->POST($paymentez.'/v2/transaction/refund/',[
                'transaction' => [
                    'id' => $transaction_reference,
                ],
                'more_info' => true
            ]);
    
            $voucher = cob_voucher::where('transaction_reference','=',$refound['transaction']['id'])->first();
    
            $voucher->estado_reembolso = $refound['status'];
            $voucher->detalle_reembolso = $refound['detail'];
            $voucher->transaction_reference = $refound['transaction']['id'];
            $voucher->status_transaction = $refound['transaction']['status'];
            $voucher->authorization_code = $refound['transaction']['authorization_code'];
            $voucher->payment_date = $refound['transaction']['payment_date'];
            $voucher->status_detail = $refound['transaction']['status_detail'];
            $voucher->message = $refound['transaction']['message'];
            $voucher->payment_method_type = $refound['transaction']['payment_method_type'];
            $voucher->dev_reference = $refound['transaction']['dev_reference'];
            $voucher->carrier_code = $refound['transaction']['carrier_code'];
            $voucher->product_description = $refound['transaction']['product_description'];
            $voucher->current_status = $refound['transaction']['current_status'];
            $voucher->amount = $refound['transaction']['amount'];
            $voucher->carrier = $refound['transaction']['carrier'];
            $voucher->installments = $refound['transaction']['installments'];
            $voucher->installments_type = $refound['transaction']['installments_type'];
    
            if($refound['status'] == "success"){
                $voucher->estado = "REEMBOLSO EXITOSO";
                $voucher->save();
                for( $i = 0; $i < count($voucher->cobro); $i++){
                    $reembolsar_cobro = DB::select('call reembolsar_cobro(?, ?)', [
                        $voucher->cobro[$i]->valor,
                        $voucher->cobro[$i]->estado_cuenta->id,
                    ]);
                    $voucher->cobro[$i]->update(['estado' => 'REEMBOLSADA']);
                }
                // $diferido = $voucher->diferido->cuota;
                // Mail::to(Auth::user()->email)->send(new PagoMailable($voucher, $diferido));
                return back()->with('confirmar','Reembolso exitoso');
            }elseif($refound['status'] == "pending"){
                $voucher->estado = "REEMBOLSO PENDIENTE";
                $voucher->save();
                return back()->with('confirmar','Reembolso pendiente');
            }elseif($refound['status'] == "failure"){
                // $voucher->estado = "REEMBOLSO FALLIDO";
                // $voucher->save();
                return back()->with('error','Ocurrio un error');
            }else{
                return back()->with('error','Ocurrio un error');
            }
        } catch (\Exception $e) {
            $refound->throwIf(
                \Log::info('Fallo',['error' => $refound]),
            );
            \Log::debug('Fallo'. $e->getMessage());
            abort(404);
        }
    }
}

