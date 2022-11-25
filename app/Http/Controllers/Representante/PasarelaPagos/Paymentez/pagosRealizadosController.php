<?php

namespace App\Http\Controllers\Representante\PasarelaPagos\Paymentez;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\cob_voucher;

class pagosRealizadosController extends Controller

{
    public function pagosRealizados(){

        try {

            $id = Auth::user()->representante->id;

            $voucher = cob_voucher::select("*")->where("representante_id","=",$id)->where("estado","=","COBRO EXITOSO")->get();
    
            return view('representante.pasarelaPagos.pagosRealizados', compact('voucher'));

        } catch (\Throwable $th) {
            
            return back()->with('error','error inesperado');

        }



    }
}
