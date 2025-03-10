<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\aspiranteRequest;
use App\Http\Requests\finalAspiranteRequest;
use App\Http\Requests\saludRequest;
use App\Models\matriculacion;
use App\Models\salud;
class fichasController extends Controller
{
    
    public function createAspirante(){

        return view('fichas.aspirante');

    }

    public function storeAspirante(aspiranteRequest $request){

        $consulta  = matriculacion::where('cedula_estudiante',$request->cedula_estudiante)->first();
        if($consulta){
            return redirect()->route('ficha.aspirante.registro.final.create',[
                'cedula' => $request->cedula_estudiante,
            ]);
        }else{
            $matriculacion = matriculacion::create([
                'cedula_estudiante' => $request->cedula_estudiante,
                'primer_nombre_estudiante' => $request->primer_nombre_estudiante,
                'segundo_nombre_estudiante' => $request->segundo_nombre_estudiante,
                'apellido_paterno_estudiante' => $request->apellido_paterno_estudiante,
                'apellido_materno_estudiante' => $request->apellido_materno_estudiante,
                'fecha_nacimiento_estudiante' => $request->fecha_nacimiento_estudiante,
                'ano_basica' => $request->ano_basica,
                'codigo_unico_electrico' => $request->codigo_unico_electrico,
                'genero_estudiante' => $request->genero_estudiante,
                'nuevo_nsc' => $request->nuevo_nsc,
                'transporte_escolar' => $request->transporte_escolar,
                'ruta_escolar' => $request->ruta_escolar,
                // 
                'cedula_madre' => $request->cedula_madre,
                'primer_nombre_madre' => $request->primer_nombre_madre,
                'segundo_nombre_madre' => $request->segundo_nombre_madre,
                'apellido_paterno_madre' => $request->apellido_paterno_madre,
                'apellido_materno_madre' => $request->apellido_materno_madre,
                'direccion_madre' => $request->direccion_madre,
                'correo_madre' => $request->correo_madre,
                'telefono_madre' => $request->telefono_madre,
                'relacion_representante_uno' => $request->relacion_representante_uno,
                // 
                'cedula_padre' => $request->cedula_padre,
                'primer_nombre_padre' => $request->primer_nombre_padre,
                'segundo_nombre_padre' => $request->segundo_nombre_padre,
                'apellido_paterno_padre' => $request->apellido_paterno_padre,
                'apellido_materno_padre' => $request->apellido_materno_padre,
                'direccion_padre' => $request->direccion_padre,
                'correo_padre' => $request->correo_padre,
                'telefono_padre' => $request->telefono_padre,
                'relacion_representante_dos' => $request->relacion_representante_dos,
                // 
                'forma_pago_pensiones' => $request->forma_pago_pensiones,
                'facturacion' => $request->facturacion,
                'cedula_ruc' => $request->cedula_ruc,
                'razon_social' => $request->razon_social,
                'direccion_facturacion' => $request->direccion_facturacion,
                'correo_facturacion' => $request->correo_facturacion,
                'telefono_facturacion' => $request->telefono_facturacion,
                'primera_referencia_familiar_nombres' => $request->primera_referencia_familiar_nombres,
                'primera_referencia_familiar_cedula' => $request->primera_referencia_familiar_cedula,
                'primera_referencia_familiar_telefono' => $request->primera_referencia_familiar_telefono,
                'primera_referencia_familiar_modalidad' => $request->primera_referencia_familiar_modalidad,
                'segunda_referencia_familiar_nombres' => $request->segunda_referencia_familiar_nombres,
                'segunda_referencia_familiar_cedula' => $request->segunda_referencia_familiar_cedula,
                'segunda_referencia_familiar_telefono' => $request->segunda_referencia_familiar_telefono,
                'segunda_referencia_familiar_modalidad' => $request->segunda_referencia_familiar_modalidad,
                'tercera_referencia_familiar_nombres' => $request->tercera_referencia_familiar_nombres,
                'tercera_referencia_familiar_cedula' => $request->tercera_referencia_familiar_cedula,
                'tercera_referencia_familiar_telefono' => $request->tercera_referencia_familiar_telefono,
                'tercera_referencia_familiar_modalidad' => $request->tercera_referencia_familiar_modalidad,
            ]);
            return redirect()->route('ficha.aspirante.registro.final.create',[
                'cedula' => $request->cedula_estudiante,
            ]);
        }

    }

    public function createFinalAspirante($cedula){

        $consulta  = matriculacion::where('cedula_estudiante', $cedula)->first();
        return view('fichas.finalAspirante', compact('consulta'));

    }

    public function createStoreAspirante(finalAspiranteRequest $request){

        $consulta  = matriculacion::where('cedula_estudiante',$request->autorizacion_cedula_estudiante)->first();
        $consulta->update([
            'autorizacion_nombres_representante' => $request->autorizacion_nombres_representante,
            'autorizacion_cedula_representante' => $request->autorizacion_cedula_representante,
            'autorizacion_nombres_estudiante' => $request->autorizacion_nombres_estudiante,
            'autorizacion_cedula_estudiante' => $request->autorizacion_cedula_estudiante,
            'autorizacion_curso_estudiante' => $request->autorizacion_curso_estudiante,
            'autorizacion_direccion_representante' => $request->autorizacion_direccion_representante,
            'autorizacion_telefono_representante' => $request->autorizacion_telefono_representante,
            'autorizacion_email_representante' => $request->autorizacion_email_representante,
            'estado' => 'Completado',
        ]);

        return redirect()->route('ficha.aspirante.create')->with('success', 'Fciha completada con éxito.');

    }

    public function buscarCedulaFichaMatricula(Request $request)
    {
        $cedula = matriculacion::where('cedula_estudiante', $request->cedula)->first(); // Buscar en la base de 
        return $cedula;
        return response()->json($cedula);
    }

    public function createSalud(){

        return view('fichas.salud');

    }

    public function storeSalud(saludRequest $request){

        // return $request->all();
        $consulta  = salud::where('cedula_estudiante',$request->cedula_estudiante)->first();
        if($consulta){
            return redirect()->route('ficha.salud.create');
        }else{
            $salud = salud::create([
                'cedula_estudiante' => $request->cedula_estudiante,
                'primer_nombre_estudiante' => $request->primer_nombre_estudiante,
                'segundo_nombre_estudiante' => $request->segundo_nombre_estudiante,
                'apellido_paterno_estudiante' => $request->apellido_paterno_estudiante,
                'apellido_materno_estudiante' => $request->apellido_materno_estudiante,
                'ano_basica' => $request->ano_basica,
                'estatura' => $request->estatura,
                'peso_libras' => $request->peso_libras,
                'discapacidad_si_no' => $request->discapacidad_si_no,
                'discapacidad_lenguaje_si_no' => $request->discapacidad_lenguaje_si_no,
                'discapacidad_auditiva_si_no' => $request->discapacidad_auditiva_si_no,
                'discapacidad_visual_si_no' => $request->discapacidad_visual_si_no,
                'discapacidad_fisca_si_no' => $request->discapacidad_fisca_si_no,
                'discapacidad_intelectua_si_no' => $request->discapacidad_intelectua_si_no,
                'aparatos_ayuda' => $request->aparatos_ayuda,
                'especifique_aparatos_ayuda' => $request->especifique_aparatos_ayuda,
                'carnet_conadis_si_no' => $request->carnet_conadis_si_no,
                'numero_carnet_conadis' => $request->numero_carnet_conadis,
                'medicamento_si_no' => $request->medicamento_si_no,
                'especifique_medicamentos' => $request->medicamento_si_no,
                'alergia_estudiante_si_no' => $request->alergia_estudiante_si_no,
                'alergia_estudiante' => $request->alergia_estudiante,
                'enfermedades_accidentes' => $request->enfermedades_accidentes,
                'especifique_accidente_enfermedad' => $request->especifique_accidente_enfermedad,
                'intervencion_quirurgica_si_no' => $request->intervencion_quirurgica_si_no,
                'cantidad_intervencion_quirugicas' => $request->cantidad_intervencion_quirugicas,
                'tipo_intervencion_quirugica' => $request->tipo_intervencion_quirugica,
                'fecha_intervencion_quirugica' => $request->fecha_intervencion_quirugica,
                'fecha_ultima_desparasitacion' => $request->fecha_ultima_desparasitacion,
                'vacunas' => $request->vacunas,
                'otra_vacuna' => $request->otra_vacuna,
                'dificultad_dormir' => $request->dificultad_dormir,
                'otra_dificultad_dormir' => $request->otra_dificultad_dormir,
                'antecedentes_patologicos_famiiares' => $request->antecedentes_patologicos_famiiares,
                'especifique_antecedentes_patologicos_famiiares' => $request->especifique_antecedentes_patologicos_famiiares,
                'seguro_estudiante_si_no' => $request->seguro_estudiante_si_no,
                'aseguradora_salud' => $request->aseguradora_salud,
                'aseguradora_salud_telefono' => $request->aseguradora_salud_telefono,
                'aseguradora_salud_emergencia' => $request->aseguradora_salud_emergencia,
                'aseguradora_accidente' => $request->aseguradora_accidente,
                'aseguradora_accidente_telefono' => $request->aseguradora_accidente_telefono,
                'aseguradora_accidente_emergencia' => $request->aseguradora_accidente_emergencia,
                'aseguradora_otra' => $request->aseguradora_otra,
                'aseguradora_otro_telefono' => $request->aseguradora_otro_telefono,
                'aseguradora_otro_emergencia' => $request->aseguradora_otro_emergencia,
            ]);
            return redirect()->route('ficha.salud.create');
        }

    }

}
