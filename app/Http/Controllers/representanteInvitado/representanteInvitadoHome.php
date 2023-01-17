<?php

namespace App\Http\Controllers\representanteInvitado;

use App\Http\Controllers\Controller;
use App\Http\Requests\matriculacion\representantePaso1;
use App\Models\EstudianteRepresentante;
use App\Models\fichaMatriculacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class representanteInvitadoHome extends Controller
{
    public function pasoUno(){

        $representanteId = Auth::user()->persona->representante->id;
        $relacionEstudinateRepresentante = EstudianteRepresentante::select('*')->where('representante_id','=',$representanteId)->get();
        // return $relacionEstudinateRepresentante[0]->estudiante->persona;
        // return $relacionEstudinateRepresentante;
        // return $relacionEstudinateRepresentante[0]->estudiante;
        $numeroDeEstudiante = count($relacionEstudinateRepresentante);
        return view('representanteInvitado.representanteInvitadoPasoUno', compact('relacionEstudinateRepresentante','numeroDeEstudiante'));

    }

    public function pasoUnoDatos(representantePaso1 $request){

        if(is_null($fichMtariculacion)){

            $pasoUno = fichaMatriculacion::create([
                'estudiante_id' => $id,
                'codigo_domicilio_estudiante' => $request->get('codigoNacional'),
                'transporte_escolar' => $request->get('exampleRadios')
            ]);
            
        }else{

            // 

        }
        
        return back();
    }

    public function pasoDos(){

        $representante = Auth::user()->persona;
        return view('representanteInvitado.representanteInvitado-paso-2', compact('representante'));

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
