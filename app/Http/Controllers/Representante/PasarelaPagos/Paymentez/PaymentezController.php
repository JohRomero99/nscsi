<?php

namespace App\Http\Controllers\Representante\PasarelaPagos\Paymentez;

use App\Models\cob_card_transaction;
use App\Models\cob_estado_cuenta;
use App\Models\cob_voucher;
use App\Models\cob_reembolso;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Representante;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Collection;
use App\Http\Requests\CodigoOtp;
use Illuminate\Http\Request;
use App\Mail\PagoMailable;
use App\Models\User;
use DateTime;

class PaymentezController extends Controller
{
    
    public function metodoPago(Request $request){

        $request->validate([
            'total' => 'required',
        ]);
        
        try {

            $saldos = $request->saldo; $nombre = $request->nombre; $apellido = $request->apellido; $id = $request->id;
            $tarjetas = []; $contador = 0;

            $cardsList = Http::withHeaders([
                'Auth-Token' => auth_token()
            ])->GET('https://ccapi-stg.paymentez.com/v2/card/list',[
                'uid' => Auth::user()->code_paymentez
            ]);

            for( $i = 0; $i < $cardsList['result_size']; $i++){
                if($cardsList['cards'][$i]['status'] == "valid"){
                    $tarjetas[$i] = $cardsList['cards'][$i];
                    $contador = $contador + 1;
                }    
            }

            $result_size = $cardsList['result_size'];
            $total = $request->total;
            $total = Crypt::encryptString($total);

            return view('representante.pasarelaPagos.metodoPago', compact('saldos','tarjetas','contador','total','id','nombre','apellido'));

        } catch (\Throwable $th) {
            
            return back()->with('error','error inesperado');

        }

    }

    public function invoice($cobro){

        return view('representante.pasarelaPagos.factura', compact('cobro'));

    }

}
