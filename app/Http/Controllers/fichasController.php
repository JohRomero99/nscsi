<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\aspiranteRequest;
use App\Models\matriculacion;
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
                'referencia_familiar' => json_encode($request->referencia_familiar),
                'informacion_verdadera' => $request->informacion_verdadera,
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

    public function createStoreAspirante(Request $request){

        $consulta  = matriculacion::where('cedula_estudiante',$request->autorizacion_estudiante[3])->first();
        $consulta->update([
            'autorizacion_legal_estudiante' => json_encode($request->autorizacion_estudiante),
        ]);

        return redirect()->route('ficha.aspirante.create')->with('success', 'Fciha completada con éxito.');

    }

    public function buscarCedulaFichaMatricula(Request $request)
    {
        $cedula = matriculacion::where('cedula_estudiante', $request->cedula)->first(); // Buscar en la base de 
        return $cedula;
        return response()->json($cedula);
        // if ($persona) {
        //     // Retornar los datos de la persona como JSON si existe
        //     return response()->json($persona);
        // } else {
        //     // Retornar un mensaje de error si no existe
        //     return response()->json(['error' => 'Cédula no encontrada'], 404);
        // }
    }

}
