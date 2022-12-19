<?php

namespace App\Http\Controllers\matriculacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\matriculacion\registroEstudianteAdmitido;
use App\Models\Estudiante;
use App\Models\EstudianteRepresentante;
use App\Models\Persona;
use App\Models\Representante;
use Faker\Provider\ar_EG\Person;
use League\CommonMark\Extension\CommonMark\Parser\Inline\EscapableParser;

class estudianteAdmitidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('matriculacion.estudianteAdmistido');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(registroEstudianteAdmitido $request)
    {

        $personaEstudiante = Persona::select('*')->where('identificacion','=',$request->cedulaEstudiante)->get();

        if(count($personaEstudiante) > 0){

            return back()->with("error","Ya se encuentra registrado");

        }else{

            $nuevoPersonaEstudiante=Persona::create([
                'identificacion' => $request->cedulaEstudiante,
                'primer_nombre' => $request->primerNombreEstudiante,
                'segundo_nombre' => $request->segundoNombreEstudiante,
                'apellido_paterno' => $request->apellidoPaternoEstudiante,
                'apellido_materno' => $request->apellidoMaternoEstudiante,
            ]);
    
            $personaRepresentante = Persona::select('*')->where('identificacion','=', $request->cedulaRepresentante)->get();
    
            if(count($personaRepresentante) > 0){
    
                $estudiante=Estudiante::create([
                    'persona_id' => $nuevoPersonaEstudiante->id
                ]);

                $EstudianteRepresentante=EstudianteRepresentante::create([
                    'estudiante_id' => $estudiante->id,
                    'representante_id' => $personaRepresentante[0]->representante->id
                ]);
    
                return back()->with("exito","Datos guardados correctamente");
            }else{
    
                $nuevoPersonaRepresentante=Persona::create([
                    'identificacion' => $request->cedulaRepresentante,
                    'primer_nombre' => $request->primerNombreRepresentante,
                    'segundo_nombre' => $request->segundoNombreRepresentante,
                    'apellido_paterno' => $request->apellidoPaternoRepresentante,
                    'apellido_materno' => $request->apellidoMaternoRepresentante,
                    'correo' => $request->correoRepresentante,
                ]);

                $estudiante=Estudiante::create([
                    'persona_id' => $nuevoPersonaEstudiante->id
                ]);

                $representante=Representante::create([
                    'persona_id' => $nuevoPersonaRepresentante->id
                ]);
    
                $EstudianteRepresentante=EstudianteRepresentante::create([
                    'estudiante_id' => $estudiante->id,
                    'representante_id' => $representante->id
                ]);
    
                return back()->with("exito","Datos guardados correctamente");
            }    
        }
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * 
     *
     * @param  int  $ci
     * @return \Illuminate\Http\Response
     */
    public function conusltar($ci)
    {
        return $ci;
    }
}
