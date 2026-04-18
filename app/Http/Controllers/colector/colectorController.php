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
use App\Models\pagos;
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

    public function show($id){

        $estudiante = estudiante::find($id);
        $cobroDetalle = $estudiante->estudiantePension->cobroDetalle;
        //$cobroDetalle = cobroDetalle::all();

        $totalAdeudado = $cobroDetalle->sum(function ($item) {
            return $item->getSaldo();
        });

        return view('colector.show', compact('estudiante','totalAdeudado'));

    }

    public function pago(Request $request){

        // pagos::create([
        //     'cob_detalle_id' => $request->cob_detalle_id,
        //     'monto' => $request->pago_en_caja,
        //     'fecha_pago' => now(),
        // ]);

        $pago_en_caja = $request->pago_en_caja;

        // Obtener todos los cobros pendientes ordenados
        $detalles = cobroDetalle::where('cob_estudiante_id', $request->estudiante_id)
            ->orderBy('fecha_vencimiento')
            ->get();

        foreach ($detalles as $detalle) {

            $saldo = $detalle->getSaldo();

            if ($saldo <= 0) {
                continue; // ya está pagado
            }

            if ($pago_en_caja <= 0) {
                break; // ya no hay dinero
            }

            // cuánto se va a pagar en este mes
            $pago = min($saldo, $pago_en_caja);

            pagos::create([
                'cob_detalle_id' => $detalle->id,
                'monto' => $pago,
                'fecha_pago' => now(),
            ]);

            // restar lo aplicado
            $pago_en_caja -= $pago;
        }

        return back()->with('success', 'Pago registrado correctamente');

    }

    
    public function buscarEstudiante(Request $request){

        $estudiantes = estudiante::whereHas('persona', function($q) use ($request) {
            $q->where('cedula', 'like', "%{$request->buscarEstudiante}%")
            ->orWhere('primer_nombre', 'like', "%{$request->buscarEstudiante}%")
            ->orWhere('segundo_nombre', 'like', "%{$request->buscarEstudiante}%")
            ->orWhere('apellido_paterno', 'like', "%{$request->buscarEstudiante}%")
            ->orWhere('apellido_materno', 'like', "%{$request->buscarEstudiante}%");
        })->get();

        return view('colector.index', compact('estudiantes'));

    }

    public function deudas(){

        $cobros = cobroDetalle::with('estudiantePension.estudiante.persona')->get();

        $niveles = [];

        foreach ($cobros as $cobro) {

            $meses = $cobro->getMesesMora();
            $saldo = $cobro->getSaldo();

            // ignorar los que no deben nada
            if ($saldo <= 0 || $meses == 0) continue;

            // limitar a máximo 10 meses
            $meses = min($meses, 10);

            if (!isset($niveles[$meses])) {
                $niveles[$meses] = [
                    'meses' => $meses,
                    'estudiantes' => [],
                    'total' => 0,
                ];
            }

            // Guardar estudiante (evitar duplicados)
            $estudianteId = $cobro->estudiantePension->estudiante->id;

            if (!in_array($estudianteId, $niveles[$meses]['estudiantes'])) {
                $niveles[$meses]['estudiantes'][] = $estudianteId;
            }

            $niveles[$meses]['total'] += $saldo;
        }

        // Ordenar por meses
        ksort($niveles);

        return view('colector.deudores', compact('niveles'));

    }
}
