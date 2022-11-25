<?php

namespace App\Http\Controllers\Representante\PasarelaPagos\Paymentez;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use DateTime;

class listadoTarjetaController extends Controller
{
    public function listcards(){

        try {

            $tarjetas = []; $contador = 0;

            $cardsList = Http::withHeaders([
                'Auth-Token' => auth_token()
            ])->GET(paymentez().'/v2/card/list',[
                'uid' => Auth::user()->code_paymentez
            ]);

            // return $cardsList;

            for( $i = 0; $i < $cardsList['result_size']; $i++){
                if($cardsList['cards'][$i]['status'] == "valid"){
                    $tarjetas[$i] = $cardsList['cards'][$i];
                    $contador = $contador + 1;
                }
            }
            return view('representante.pasarelaPagos.formaPago', compact('tarjetas','contador'));

        } catch (\Exception $e){

            $cardsList->throwIf(
                \Log::info('Fallo',['error' => $cardsList]),
            );
            \Log::debug('Fallo'. $e->getMessage());
            abort(404);

        }

    }

    public function addcard(){

        return view('representante.pasarelaPagos.agregarTarjeta');

    }
}
