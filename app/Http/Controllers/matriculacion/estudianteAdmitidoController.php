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

        if($request->cedulaEstudiante == "")
            $personaEstudiante = Persona::select('*')->where('identificacion','=',$request->cedulaPasaporte)->get();
        else
            $personaEstudiante = Persona::select('*')->where('identificacion','=',$request->cedulaEstudiante)->get();

        if(count($personaEstudiante) > 0){

            return redirect()->back()->with("error","Ya se encuentra registrado")->withInput();

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
            $nuevoPersonaEstudiante->save();
    
            if($request->cedulaRepresentante == "")
                $personaRepresentante = Persona::select('*')->where('identificacion','=',$request->pasaporteRepresentante)->get();
            else
                $personaRepresentante = Persona::select('*')->where('identificacion','=',$request->cedulaRepresentante)->get();
    
            if(count($personaRepresentante) > 0){
    
                $estudiante=Estudiante::create([
                    'persona_id' => $nuevoPersonaEstudiante->id
                ]);

                $EstudianteRepresentante=EstudianteRepresentante::create([
                    'estudiante_id' => $estudiante->id,
                    'representante_id' => $personaRepresentante[0]->representante->id
                ]);
    
                return redirect()->back()->with('exito','Datos guardados correctamente');
            }else{
    
                $nuevoPersonaRepresentante = new Persona();
                if($request->cedulaRepresentante == "")
                    $nuevoPersonaRepresentante->identificacion = $request->pasaporteRepresentante;
                else
                    $nuevoPersonaRepresentante->identificacion = $request->cedulaRepresentante;
                $nuevoPersonaRepresentante->primer_nombre = $request->primerRepresentante;
                $nuevoPersonaRepresentante->segundo_nombre = $request->segundoNombreRepresentante;
                $nuevoPersonaRepresentante->apellido_paterno = $request->apellidoPaternoRepresentante;
                $nuevoPersonaRepresentante->apellido_materno = $request->apellidoMaternoRepresentante;
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

        // $datosRepresentante = Persona::select('*')->where('identificacion','=', $request->cedulaRepresentante)->get();
        // $primerNombre = $datosRepresentante[0]->primer_nombre;
        // $segundoNombre = $datosRepresentante[0]->segundo_nombre;
        // $apellidoPaterno = $datosRepresentante[0]->apellido_paterno;
        // $apellidoMaterno = $datosRepresentante[0]->apellido_materno;
        
        // $result = array("$primerNombre", "$segundoNombre", "$apellidoPaterno", "$apellidoMaterno");

        // $myJSON = json_encode($result);
        // echo $myJSON;

        $user_id = $request->cedulaRepresentante;
        $con = mysqli_connect("localhost", "root", "", "dbnscsi");
        if ($user_id !== "") {
            
            $query = mysqli_query($con, "SELECT * FROM nsc_persona WHERE identificacion = '$user_id'");

            $row = mysqli_fetch_array($query);
            $primerNombre= $row["primer_nombre"];
            $segundoNombre = $row["segundo_nombre"];
            $apellidoMaterno = $row["apellido_paterno"];
            $apellidoPaterno = $row["apellido_materno"];
            $correo = $row["correo"];
        }

        // Store it in a array
        $result = array("$primerNombre", "$segundoNombre", "$apellidoPaterno", "$apellidoMaterno", "$correo");

        // Send in JSON encoded form
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
