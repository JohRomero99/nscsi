<?php

namespace App\Http\Controllers\admision;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\nacionalidad;
use App\Models\sexo;
use App\Models\ocupacion;
use App\Models\trabajaPara;
use App\Models\relacionFamiliar;
use App\Http\Requests\admision\datosPadresRequest;

class datosPadresController extends Controller
{
    
    /**
     * 
     */
    public function create()
    {

        // Obtengo todos los datos registrados en la tabla "nacionalidad".
        $nacionalidad = nacionalidad::all();

        // Obtengo todos los datos registrados en la tabla "ocupacion".
        $ocupacion = ocupacion::all();

        // Obtengo todos los datos registrados en la tabla "sexo".
        $sexo = sexo::all();

        // Obtengo todos los datos registrados en la tabla "trabaja para".
        $trabajaPara = trabajaPara::all();

        // Obtengo todos los datos registrados en la tabla "referencia familiar".
        $relacionFamiliar = relacionFamiliar::all();

        // Retorno a la vida dashboard con cada una de la variables creadas anteriormente.
        return view("admision.fichaDatosPadres", compact("nacionalidad","sexo","ocupacion","trabajaPara","relacionFamiliar"));

    }

    public function store(datosPadresRequest $requet)
    {

        return $requet->all();

    }


}
