<?php

namespace App\Http\Controllers\Representante\PasarelaPagos\Paymentez;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pay_url_paymentez;

class ambienteProduccionController extends Controller
{
    public function ambienteProduccionVista(){

        $url = pay_url_paymentez::all();
        return view('representante.pasarelaPagos.urlAmbientes', compact('url'));

    }

    public function ambienteProduccionDatos(Request $request){

        $request->validate([
            'radio' => 'required',
        ]);
        $url1 = pay_url_paymentez::find(1);
        $url2 = pay_url_paymentez::find(2);

        if($request->radio == "1"){
            $url1->estado = "ACTIVO";
            $url1->save();

            $url2->estado = null;
            $url2->save();
        }elseif($request->radio == "2"){
            $url1->estado = null;
            $url1->save();

            $url2->estado = "ACTIVO";
            $url2->save();
        }

        return back()->with('exito','url actualizada con exito');

    }
}
