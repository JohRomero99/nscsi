<?php

namespace App\Http\Controllers\representanteInvitado;

use App\Http\Controllers\Controller;
use App\Http\Requests\matriculacion\representantePaso1;
use App\Models\EstudianteRepresentante;
use App\Models\Representante;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class representanteInvitadoHome extends Controller
{
    public function pasoUno(){

        $representanteId = Auth::user()->persona->representante->id;
        $relacionEstudinateRepresentante = EstudianteRepresentante::select('*')->where('representante_id','=',$representanteId)->get();
        $estudiante = $relacionEstudinateRepresentante[0]->estudiante;
        return view('representanteInvitado.representanteInvitado-paso-1', compact('estudiante'));

    }

    public function pasoUnoDatos(representantePaso1 $request){

        return $request->all();
        

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
