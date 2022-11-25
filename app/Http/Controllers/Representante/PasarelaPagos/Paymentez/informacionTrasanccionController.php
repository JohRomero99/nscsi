<?php

namespace App\Http\Controllers\Representante\PasarelaPagos\Paymentez;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class informacionTrasanccionController extends Controller
{
    public function informacionTrasanccion(){

        $info = Http::withHeaders([
            'Auth-Token' => auth_token()
        ])->GET(paymentez().'/v2/transaction/<transaction_id>',[
            'transaction_id' => 'DF-263730'
        ]);

        return $info;

    }

    public function prueba($array){

        return $array;

    }
}
