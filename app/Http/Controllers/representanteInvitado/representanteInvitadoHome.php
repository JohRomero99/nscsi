<?php

namespace App\Http\Controllers\representanteInvitado;

use App\Http\Controllers\Controller;
use App\Http\Requests\matriculacion\representantePasoUno;
use App\Models\EstudianteRepresentante;
use App\Models\fichaMatriculacion;
use App\Models\nscMetodoPagoPensiones;
use App\Models\nscRutaExpreso;
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

        return $request->all();
        $limite = count($request->get('transporteEscolar'));

        for( $i = 0; $i < $limite; $i++ ){
            $pasoUno = fichaMatriculacion::create([
                'estudiante_id' => $request->estudianteId[$i],
                'representante_id' => $request->representanteId[$i],
                'codigo_domicilio_estudiante' => $request->codigoNacional[$i],
            ]);
        }

        return redirect()->route('representanteInvitado.paso-2');
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
