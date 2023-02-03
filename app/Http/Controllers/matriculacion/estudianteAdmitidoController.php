<?php

namespace App\Http\Controllers\matriculacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\matriculacion\registroEstudianteAdmitido;
use App\Models\Estudiante;
use App\Models\EstudianteRepresentante;
use App\Models\Persona;
use App\Models\Representante;
use App\Models\User;
use App\Http\Controllers\Colector\NscCobrosController;
use App\Mail\matriculacionCreedencialesMarkdown;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

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

        // Verificar si el estudiante ya se encuentra registrado con cédula o pasaporte.
        if($request->cedulaEstudiante == "nullEstudianteCedula")
            $personaEstudiante = Persona::select('*')->where('identificacion','=',$request->pasaporteEstudiante)->get();
        else
            $personaEstudiante = Persona::select('*')->where('identificacion','=',$request->cedulaEstudiante)->get();

        // Si ya existe el estudiante se regresa al la página nuevamente.
        if(count($personaEstudiante) > 0){

            return redirect()->back()->with("error","cédula registrada")->with("cedula",$personaEstudiante[0]->identificacion)->withInput();

        // caso contrario se crea el nuevo estudiante.
        }else{

            $nuevoPersonaEstudiante = new Persona();
            if($request->cedulaEstudiante == "")
                $nuevoPersonaEstudiante->identificacion = $request->pasaporteEstudiante;
            else
                $nuevoPersonaEstudiante->identificacion = $request->cedulaEstudiante;
            $nuevoPersonaEstudiante->primer_nombre = strtoupper($request->primerNombreEstudiante);
            $nuevoPersonaEstudiante->segundo_nombre = strtoupper($request->segundoNombreEstudiante);
            $nuevoPersonaEstudiante->apellido_paterno = strtoupper($request->apellidoPaternoEstudiante);
            $nuevoPersonaEstudiante->apellido_materno = strtoupper($request->apellidoMaternoEstudiante);
            $nuevoPersonaEstudiante->fecha_nacimiento = strtoupper($request->fechaNacimientoEstudiante);
            $nuevoPersonaEstudiante->save();
          
            // Estudiante::where('persona_id','=',$nuevoPersonaEstudiante->id)->update(['curso' => $request->get('anoLectivoEstudiante')]);
    
            // Verificar si existe el representante con cédula o pasaporte.
            if($request->cedulaRepresentante == "")
                $nuevoRepresentante = Persona::select('*')->where('identificacion','=',$request->pasaporteRepresentante)->first();
            else
                $nuevoRepresentante = Persona::select('*')->where('identificacion','=',$request->cedulaRepresentante)->first();

            // Verificamos si el representante ya existe en caso de que no exista se lo crea.
            if(is_null($nuevoRepresentante)){
                // Creación de nuevo Usuario (representante) con rol representando-invitado.
                $nuevoUsuario = new User();
                $nuevoUsuarioContrasena = Str::random(8);
                if($request->cedulaRepresentante == "")
                    $nuevoUsuario->name = $request->pasaporteRepresentante;
                else
                    $nuevoUsuario->name = $request->cedulaRepresentante;
                $nuevoUsuario->email = $request->correoRepresentante;
                $nuevoUsuario->password = bcrypt($nuevoUsuarioContrasena);
                $nuevoUsuario->assignRole('representante_invitado');
                $nuevoUsuario->save();

                // Se crea a una nueva Persona (representante).
                $nuevoRepresentante = new Persona();
                $nuevoRepresentante->user_id = $nuevoUsuario->id;
                if($request->cedulaRepresentante == "")
                    $nuevoRepresentante->identificacion = $request->pasaporteRepresentante;
                else
                    $nuevoRepresentante->identificacion = $request->cedulaRepresentante;
                $nuevoRepresentante->primer_nombre = strtoupper($request->primerNombreRepresentante);
                $nuevoRepresentante->segundo_nombre = strtoupper($request->segundoNombreRepresentante);
                $nuevoRepresentante->apellido_paterno = strtoupper($request->apellidoPaternoRepresentante);
                $nuevoRepresentante->apellido_materno = strtoupper($request->apellidoMaternoRepresentante);
                $nuevoRepresentante->correo = $request->correoRepresentante;
                $nuevoRepresentante->save();

                $representante = Representante::create([
                    'persona_id' => $nuevoRepresentante->id
                ]);

                $creado = true;
            }
                
            $estudiante = Estudiante::create([
                'persona_id' => $nuevoPersonaEstudiante->id
            ]);
    
            // Relacion Estudiante y Representante.
            $estudianteRepresentante = new estudianteRepresentante();
            $estudianteRepresentante->estudiante_id = $estudiante->id;
            if(is_null($nuevoRepresentante)){
                $estudianteRepresentante->representante_id = $representante->id;
            }else{
                $estudianteRepresentante->representante_id = $nuevoRepresentante->representante->id;
            }
            $estudianteRepresentante->save();
            $nuevoPersonaEstudiante->estudiante()->update(['curso' => $request->get('anoLectivoEstudiante')]);

            if(isset($creado)){

                Mail::to($nuevoRepresentante->correo)->send(new matriculacionCreedencialesMarkdown(
                    $nuevoUsuario->name, $nuevoUsuarioContrasena
                ));
                return redirect()->back()->with('exito','Datos guardados correctamente');

            }else{

                return redirect()->back()->with('exito','Datos guardados correctamente');
            }

            //$validacion = nscCorreoEnviadoAdmision::where('user_id','=',$nuevoUsuario->id)->first();



            // Mail::to($nuevoRepresentante->correo)->send(new matriculacionCreedencialesMarkdown(
            //     $nuevoUsuario->name, $nuevoUsuarioContrasena
            // ));
            // return redirect()->back()->with('exito','Datos guardados correctamente');
            // $usuario = User::where('name','=',$nuevoUsuario->name)->first();

        }
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboard(){

        $representante = Representante::all();
        return view('matriculacion.dashboard', compact('representante'));
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
