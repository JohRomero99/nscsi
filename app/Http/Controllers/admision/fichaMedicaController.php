<?php

namespace App\Http\Controllers\admision;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tipos_discapacidad;
use App\Models\tiposAlergia;
use App\Models\vacuna;
use App\Models\tiposEnfermedadesHereditarias;
use App\Models\relacionFamiliar;
use App\Models\tiposIntervencionesQuirurgicas;

class fichaMedicaController extends Controller
{
    /**
     * 
     */
    public function create(){

        // Obtengo todos los datos registrados en la tabla "tipos_discapacidad".
        $tiposDiscapacidad = tipos_discapacidad::all();

        // Obtengo todos los datos registrados en la tabla "tipos Alergia".
        $tiposAlergia = tiposAlergia::all();

        // Obtengo todos los datos registrados en la tabla "tipos de vacuna".
        $tipoVacuna =  vacuna::all();

        // Obtengo todos los datos registrados en la tabla "tipos de enfermedades hereditarias".
        $tipoEnfermedadesHereditarias =  tiposEnfermedadesHereditarias::all();

        // Obtengo todos los datos registrados en la tabla "relaciionFamiliar".
        $relacionFamiliar = relacionFamiliar::all();

        // Obtengo todos los datos registrados en la tabla "tipos intervenciones quirurgicas".
        $tiposIntervencionesQuirurgicas = tiposIntervencionesQuirurgicas::all();

        return view("admision.fichaDatosMedica", compact('tiposDiscapacidad','tiposAlergia','tipoVacuna','tipoEnfermedadesHereditarias','relacionFamiliar','tiposIntervencionesQuirurgicas'));

    }

    /**
     * 
     */
    public function store(){
        


    }
}
