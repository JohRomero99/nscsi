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
use App\Models\persona;
use App\Models\estudiante;
use App\Models\representante;
use App\Models\anioAcademico;
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
        $anioAcademico = anioAcademico::all();

        return view('colector.create', compact('periodoLectivo','valorSeguro','valorPensioninicialDecimo','valorPensionBachillerato','motivo','valorAmbienteDigital','valorMatriculacion','valorPension','anioAcademico'));
        

    }

    public function edit($userId){


    }

    public function store(nuevoEstudianteRequest $request){

        $persona_estudiante = persona::create([
            'cedula' => $request->cedula,
            'primer_nombre' => $request->segundo_nombre,
            'segundo_nombre' => $request->segundo_nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
        ]);

        $persona_reprsentante = persona::create([
            'cedula' => $request->cedula,
            'primer_nombre' => $request->primer_nombre_representante,
            'segundo_nombre' => $request->segundo_nombre_representante,
            'apellido_paterno' => $request->apellido_paterno_representante,
            'apellido_materno' => $request->apellido_materno_representante,
            'telefono_celular' => $request->telefono,
            'email' => $request->email,
        ]);

        $estudiante = estudiante::create([
            'persona_id' => $persona_estudiante->id,
            //'numero_matricula' => '',
            'anio_academico_id' => '',
            'curso' => $request->curso,
            //'usr_moodle_id' => '',
            //'estado' => '',
        ]);

        $representante = representante::create([
            'persona_id' => $persona_representante->id,
        ]);

        $estudianteRepresentante = estudianteRepresentante::create([
            'estudiante_id' => $estudiante->id,
            'representante_id' => $representante->id,
        ]);

        return "Listo";

    }

    public function update($userId, Request $request){


    }

    public function destroy($userId){


    }

    public function pago(Request $request){

        return $request->all();

    }
}
