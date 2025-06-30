<?php

namespace App\Http\Controllers\admision;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\anioAcademico;
use App\Models\estudiante;
use App\Models\representante;
use App\Models\persona;
use App\Models\estudianteRepresentante;
use Illuminate\Support\Facades\Auth;

class agregarEstudianteController extends Controller
{
    
    /**
        * Página princial del proceso de admisión y matriculación.
     */
    public function create()
    {

        // Obtengo todos los datos registrados en la tabla "año acádemico".
        $anio_academico = anioAcademico::all();

        // Retorna la vista agregarEstudiante y la variable "anio_academico".
        return view('admision.agregarEstudiante', compact('anio_academico'));

    }

    /**
        * Página princial del proceso de admisión y matriculación.
     */
    public function store(Request $request)
    {

        // Guardo los datos en la tabla persona
        $persona = persona::create([
            'cedula' => $request->cedula,
            'primer_nombre' => $request->primer_nombre,
            'segundo_nombre' => $request->segundo_nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
        ]);

        // Relaciono los datos en la tabla estudiante.
        $estudiante = estudiante::create([
            'persona_id' => $persona->id,
            'anio_academico_id' => $request->anio_basica,
        ]);

        // Relaciono el estudiante con el representante.
        $estudianteRepresentante = estudianteRepresentante::create([
            'estudiante_id' => $estudiante->id,
            'representante_id' =>  Auth::user()->id,
        ]);

        // Retorno a la misma página con un mnesaje de session.
        return redirect()->route('dashboard')->with('guardado','Estudiante registrado');     

    }

    /**
        * Eliminar todos los datos de un estudiante
     */
    public function destroy($id){

        // Busco el id en la tabla persona.
        $destroy = persona::find($id);

        // Elimino el estudiante de la tabla persona.
        $destroy->delete();

        // Redirigo a la página principal con un mensaje de sessión.
        return redirect()->route('dashboard')->with('eliminado','Estudiante eliminado con éxito');     

    }

}
