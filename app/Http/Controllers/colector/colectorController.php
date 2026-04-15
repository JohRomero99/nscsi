<?php

namespace App\Http\Controllers\colector;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
use App\Models\estudianteRepresentante;
use App\Models\User;
use App\Models\estudiantePension;
use App\Models\paralelo;
use App\Models\cobroDetalle;
use App\Models\concepto;
use Carbon\Carbon;
use App\Http\Requests\colector\nuevoEstudianteRequest;


class colectorController extends Controller
{
    public function index(){

        $pensiones = pensiones::all();
        return view('colector.index');

    }

    public function create(){

        $periodoLectivo = periodoLectivo::all();
        $valorSeguro = valorSeguro::where('periodo_lectivo_id',session('periodo_lectivo_id'))->get();
        $motivo = motivo::all();
        $valorMatriculacion = valorMatriculacion::where('periodo_lectivo_id',session('periodo_lectivo_id'))->get();
        $valorAmbienteDigital = valorAmbienteDigital::where('periodo_lectivo_id',session('periodo_lectivo_id'))->get();
        $valorPension = valorPension::where('periodo_lectivo_id',session('periodo_lectivo_id'))->get();
        $anioAcademico = anioAcademico::all();
        $paralelo = paralelo::all();

        return view('colector.create', compact('periodoLectivo','valorSeguro','motivo','valorAmbienteDigital','valorMatriculacion','valorPension','anioAcademico','paralelo'));
        

    }

    public function edit($userId){

        //

    }

    public function store(nuevoEstudianteRequest $request){

        //
        $persona_estudiante = persona::create([
            'cedula' => $request->cedula,
            'primer_nombre' => $request->primer_nombre,
            'segundo_nombre' => $request->segundo_nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
        ]);

        //
        $persona_representante = persona::create([
            'cedula' => $request->cedula_representante,
            'primer_nombre' => $request->primer_nombre_representante,
            'segundo_nombre' => $request->segundo_nombre_representante,
            'apellido_paterno' => $request->apellido_paterno_representante,
            'apellido_materno' => $request->apellido_materno_representante,
            'telefono_celular' => $request->telefono,
            'email' => $request->email,
        ]);

        //
        $estudiante = estudiante::create([
            'persona_id' => $persona_estudiante->id,
            //'numero_matricula' => '',
            //'anio_academico_id' => '',
            'curso' => $request->curso,
            //'usr_moodle_id' => '',
            //'estado' => '',
        ]);

        //
        $representante = representante::create([
            'persona_id' => $persona_representante->id,
        ]);

        //
        $estudianteRepresentante = estudianteRepresentante::create([
            'estudiante_id' => $estudiante->id,
            'representante_id' => $representante->id,
        ]);

        // Generar una contraseña y despues se cifra la contraseña.
        $randomContrasena = Str::random(10);
        $hashedContrasena = Hash::make($randomContrasena);

        // Crear Usuario y contraseña de la plataforma.
        $user = User::create([
            'name' => $estudianteRepresentante->representante->persona->primer_nombre,
            'email' => $request->email,
            'password' => $hashedContrasena,
        ])->assignRole('representante');

        //
        $estudianteRepresentante->representante->persona()->update(['user_id' => $user->id]);

        //Asiganar pension
        $estudiantePension = estudiantePension::create([
            'estudiante_id' => $estudiante->id,
            'anio_academico_id' => $request->curso,
            'paralelo_id' => $request->paralelo,
            'cob_motivo_id' => $request->motivo_matriculacion,
            'cob_valor_matriculacion_id' => $request->valor_matriculacion,
            'cob_valor_pension_id' => $request->valor_pension,
            'cob_valor_seguro_id' => $request->seguro,
            'cob_valor_ambiente_digital_id' => $request->ambiente_digital,
            'periodo_lectivo_id' => session('periodo_lectivo_id'),
        ]);

        $anioInicio = 2026;
        $meses = [4,5,6,7,8,9,10,11,12,1];

        $conceptos = concepto::all();

        foreach ($conceptos as $index => $concepto) {

            $mes = $meses[$index];
            $anio = $mes < 4 ? $anioInicio + 1 : $anioInicio;
            $fecha = Carbon::create($anio, $mes, 1)->endOfMonth();

            cobroDetalle::create([
                'cob_concepto_id' => $concepto->id,
                'cob_estudiante_id' => $estudiantePension->id,
                'cob_valor_pension_id' => $estudiantePension->cob_valor_pension_id,
                'fecha_vencimiento' => $fecha->format('Y-m-d'),

                'valor' => $estudiantePension->valorPension->pension_base,
                'total_a_pagar' => $estudiantePension->valorPension->pension_descuento,

                'total_pagado' => 0,
                'periodo_lectivo_id' => session('periodo_lectivo_id'),
            ]);
        }

        // Redirigir hacia la misma vista.
        return redirect()->route('colector.index')->with('create', 'Estudiante registrado correctamente.');

    }

    public function update($userId, Request $request){


    }

    public function destroy($userId){


    }

    public function pago(Request $request){

        return $request->all();

    }

    
    public function buscarEstudiante(Request $request){

        $buscar = $request->buscarEstudiante;

        // $estudiantes = estudiantePension::with('persona')
        //     ->where('periodo_lectivo_id', session('periodo_lectivo_id'))
        //     ->when($buscar, function ($query) use ($buscar) {
        //         $query->whereHas('persona', function($q) use ($buscar) {
        //             $q->where('cedula', 'like', "%$buscar%")
        //             ->orWhere('primer_nombre', 'like', "%$buscar%")
        //             ->orWhere('segundo_nombre', 'like', "%$buscar%")
        //             ->orWhere('apellido_paterno', 'like', "%$buscar%")
        //             ->orWhere('apellido_materno', 'like', "%$buscar%");
        //         });
        //     })->get();

        $cobroDetalle = cobroDetalle::all();
        //return $cobroDetalle[0]->estudiantePension->valorPension;

        //return $estudiantePension[0]->estudiante->persona->primer_nombre;


        return view('colector.index', compact('cobroDetalle'));

    }
}
