<?php

namespace App\Http\Controllers\Representante\PasarelaPagos\Paymentez;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pay_tarjetas_agregadas;
use Illuminate\Support\Facades\Auth;

class guardarTarjetaController extends Controller
{
    public function saveCards($bin,$status,$token,$holder_name,$expiry_year,$expiry_month,$transaction_reference,$type,$number){
                
        $existeTarjeta = pay_tarjetas_agregadas::where('transaction_reference','=',$transaction_reference)->first();
        if(!empty($existeTarjeta->transaction_reference)){
            return redirect()->route('paymentez.formaPago')->with('exito','Tarjeta añadida correctamente');
        }else{
            $pay_tarjetas_agregadas=pay_tarjetas_agregadas::create([
                'representante_id' => Auth::user()->representante->id,
                'bin' => $bin,
                'status' => $status,
                'token' => $token,
                'holder_name' => $holder_name,
                'expiry_year' => $expiry_year,
                'expiry_month' => $expiry_month,
                'transaction_reference' => $transaction_reference,
                'type' => $type,
                'number' => $number,
            ]);
            return redirect()->route('paymentez.formaPago')->with('exito','Tarjeta añadida correctamente');
        }
    }
}
