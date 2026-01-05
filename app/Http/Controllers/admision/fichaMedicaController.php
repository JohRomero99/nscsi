<?php

namespace App\Http\Controllers\admision;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tipos_discapacidad;
use App\Models\vacuna;
use App\Http\Requests\admision\fichaMedicaEstudianteRequest;

class fichaMedicaController extends Controller
{
    /**
     * 
     */
    public function create(){

        // Obtengo todos los datos registrados en la tabla "tipos_discapacidad".
        $tiposDiscapacidad = tipos_discapacidad::all();

        // Obtengo todos los datos registrados en la tabla "tipos de vacuna".
        $tipoVacuna =  vacuna::all();

        return view("admision.fichaDatosMedica", compact('tiposDiscapacidad','tipoVacuna'));

    }

    /**
     * 
     */
    public function store(fichaMedicaEstudianteRequest $request){
        
        return $request->all();

    }
}
