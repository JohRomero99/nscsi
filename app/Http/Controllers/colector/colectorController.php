<?php

namespace App\Http\Controllers\colector;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pensiones;
use App\Models\periodoLectivo;
use App\Models\valorSeguro;
use App\Models\valorPensioninicialDecimo;
use App\Models\valorPensionBachillerato;
use App\Models\motivo;
use App\Models\valorMatriculacion;
use App\Models\valorAmbienteDigital;
use App\Models\valorPension;
use App\Http\Requests\colector\nuevoEstudianteRequest;


class colectorController extends Controller
{
    public function index(){

        $pensiones = pensiones::all();
        return view('colector.index', compact('pensiones'));

    }

    public function create(){

        $periodoLectivo = periodoLectivo::all();
        $valorSeguro = valorSeguro::all();
        $valorPensioninicialDecimo = valorPensioninicialDecimo::all();
        $valorPensionBachillerato = valorPensionBachillerato::all();
        $motivo = motivo::all();
        $valorMatriculacion = valorMatriculacion::all();
        $valorAmbienteDigital = valorAmbienteDigital::all();
        $valorPension = valorPension::all();

        return view('colector.create', compact('periodoLectivo','valorSeguro','valorPensioninicialDecimo','valorPensionBachillerato','motivo','valorAmbienteDigital','valorMatriculacion','valorPension'));
        

    }

    public function edit($userId){


    }

    public function store(nuevoEstudianteRequest $request){

        return $request->all();

    }

    public function update($userId, Request $request){


    }

    public function destroy($userId){


    }

    public function pago(Request $request){

        return $request->all();

    }
}
