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

        return $request->all();

        // Verificar si el estudiante ya se encuentra registrado con cédula o pasaporte.
        if($request->cedulaEstudiante == "nullEstudianteCedula")
            $personaEstudiante = Persona::select('*')->where('identificacion','=',$request->pasaporteEstudiante)->get();
        else
            $personaEstudiante = Persona::select('*')->where('identificacion','=',$request->cedulaEstudiante)->get();

        // Si ya existe el estudiante se regresa al la página nuevamente.
        if(count($personaEstudiante) > 0){
            // if(empty($personaEstudiante[0]->estudiante->id))
                return redirect()->back()->with("error","cédula registrada")->with("cedula",$personaEstudiante[0]->identificacion)->withInput();

        // caso contrario se crea el nuevo estudiante.
        }else{

            $nuevoPersonaEstudiante = new Persona();
            if($request->cedulaEstudiante == "")
                $nuevoPersonaEstudiante->identificacion = $request->pasaporteEstudiante;
            else
                $nuevoPersonaEstudiante->identificacion = $request->cedulaEstudiante;
            $nuevoPersonaEstudiante->primer_nombre = $request->primerNombreEstudiante;
            $nuevoPersonaEstudiante->segundo_nombre = $request->segundoNombreEstudiante;
            $nuevoPersonaEstudiante->apellido_paterno = $request->apellidoPaternoEstudiante;
            $nuevoPersonaEstudiante->apellido_materno = $request->apellidoMaternoEstudiante;
            $nuevoPersonaEstudiante->fecha_nacimiento = $request->fechaNacimientoEstudiante;
            $nuevoPersonaEstudiante->estudiante()->create(['curso' => $request->anoLectivoEstudiante]);
            $nuevoPersonaEstudiante->save();
    
            // Verificar si existe el representante con cédula o pasaporte.
            if($request->cedulaRepresentante == "")
                $personaRepresentante = Persona::select('*')->where('identificacion','=',$request->pasaporteRepresentante)->get();
            else
                $personaRepresentante = Persona::select('*')->where('identificacion','=',$request->cedulaRepresentante)->get();
    
            // Si el representante existe se hace la relación Estudiante - Representante.
            if(count($personaRepresentante) > 0){
                
                $estudiante = Estudiante::create([
                    'persona_id' => $nuevoPersonaEstudiante->id
                ]);

                $EstudianteRepresentante = EstudianteRepresentante::create([
                    'estudiante_id' => $estudiante->id,
                    'representante_id' => $personaRepresentante[0]->representante->id
                ]);
    
                return redirect()->back()->with('exito','Datos guardados correctamente');

                // Caso contrario se crea el nuevo representante y se hace la relación Estudiante - Representante.
            }else{
    
                $nuevoPersonaRepresentante = new Persona();
                if($request->cedulaRepresentante == "")
                    $nuevoPersonaRepresentante->identificacion = $request->pasaporteRepresentante;
                else
                    $nuevoPersonaRepresentante->identificacion = $request->cedulaRepresentante;
                $nuevoPersonaRepresentante->primer_nombre = $request->primerNombreRepresentante;
                $nuevoPersonaRepresentante->segundo_nombre = $request->segundoNombreRepresentante;
                $nuevoPersonaRepresentante->apellido_paterno = $request->apellidoPaternoRepresentante;
                $nuevoPersonaRepresentante->apellido_materno = $request->apellidoMaternoRepresentante;
                $nuevoPersonaRepresentante->correo = $request->correoRepresentante;
                $nuevoPersonaRepresentante->save();

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
    
                return redirect()->back()->with('exito','Datos guardados correctamente');
                
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
    public function show(Request $request)
    {

        $persona = Persona::select('*')->where('identificacion','=', $request->cedulaRepresentante)->first();
        $datosRepresentante = Representante::select('*')->where('persona_id','=',$persona->id)->first();

        if ($datosRepresentante != null) {
            $primerNombre = $persona->primer_nombre;
            $segundoNombre = $persona->segundo_nombre;
            $apellidoPaterno = $persona->apellido_paterno;
            $apellidoMaterno = $persona->apellido_materno;
            $correo = $persona->correo;
         }

        // Guardamos lo datos en un array.
        $result = array("$primerNombre", "$segundoNombre", "$apellidoPaterno", "$apellidoMaterno", "$correo");

        // Enviar en forma codificada JSON.
        $myJSON = json_encode($result);
        echo $myJSON;

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
