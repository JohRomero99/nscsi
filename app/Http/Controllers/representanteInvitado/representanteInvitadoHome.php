<?php

namespace App\Http\Controllers\representanteInvitado;

use App\Http\Controllers\Controller;
use App\Http\Requests\matriculacion\representantePasoUno;
use App\Models\EstudianteRepresentante;
use App\Models\fichaMatriculacion;
use App\Models\nscMetodoPagoPensiones;
use App\Models\nscRutaExpreso;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class representanteInvitadoHome extends Controller
{
    public function pasoUno(){

        $representanteId = Auth::user()->persona->representante->id;
        $relacionEstudinateRepresentante = EstudianteRepresentante::select('*')->where('representante_id','=',$representanteId)->get();
        $numeroDeEstudiante = count($relacionEstudinateRepresentante);
        $rutas = nscRutaExpreso::all();
        return view('representanteInvitado.representanteInvitadoPasoUno', compact('relacionEstudinateRepresentante','numeroDeEstudiante','rutas'));

    }

    public function pasoUnoDatos(representantePasoUno $request){
        
        $x = 0; $a = 0; $k = 0; $l = 0;
        for( $i = 0; $i < count($request->identificacion); $i++ ){
            $fichaMatriculacion = fichaMatriculacion::find($request->estudinateRepresentante[$i]);
            if(is_null($fichaMatriculacion)){
                $x = $x; $a = $a; $k = $k; $l = $l;
                $persona = Persona::where('identificacion','=',$request->identificacion[$i])->first();
                if(is_null($persona->primer_nombre)){
                    while($x < count($request->primerNombre)){
                        $persona->primer_nombre = strtoupper($request->primerNombre[$x]);
                        $persona->save();
                        $x = $x + 1;
                        break;
                    }
                }
                if(is_null($persona->segundo_nombre)){
                    while($a < count($request->segundoNombre)){
                        $persona->segundo_nombre = strtoupper($request->segundoNombre[$a]);
                        $persona->save();
                        $a = $a + 1;
                        break;
                    }
                }
                if(is_null($persona->apellido_paterno)){
                    while($k < count($request->apellidoPaterno)){
                        $persona->apellido_paterno = strtoupper($request->apellidoPaterno[$k]);
                        $persona->save();
                        $k = $k + 1;
                        break;
                    }
                }
                if(is_null($persona->apellido_materno)){
                    while($l < count($request->apellidoMaterno)){
                        $persona->apellido_materno = strtoupper($request->apellidoMaterno[$l]);
                        $persona->save();
                        $l = $l + 1;
                        break;
                    }
                }
    
                $pasoUno = fichaMatriculacion::create([
                    'estudiante_representante' => $request->estudinateRepresentante[$i],
                    'codigo_domicilio_estudiante' => $request->codigoNacional[$i],
                ]);
            }else{
                $fichaMatriculacion->codigo_domicilio_estudiante = $request->codigoNacional[$i];
                $fichaMatriculacion->save();
                return redirect()->back()->with('exito','Informacion actualizada correctamente');
            }
        }

        return redirect()->route('representanteInvitado.paso-2')->with('exito','Datos de estudiante guardados correctamente');
    }

    public function pasoDos(){

        $representante = Auth::user()->persona;
        $metodoPagoPensiones  = nscMetodoPagoPensiones::all();
        return view('representanteInvitado.representanteInvitado-paso-2', compact('representante','metodoPagoPensiones'));

    }

    public function pasoDosDatos(Request $request){

        return $request->all();

    }

    public function pasoTres(Request $request){

        return view('representanteInvitado.representanteInvitado-paso-3');

    }

    public function pasoCuatro(Request $request){

        return view('representanteInvitado.representanteInvitado-paso-4');

    }

    public function pasoQuinto(Request $request){

        return view('representanteInvitado.representanteInvitado-paso-5');

    }

}
