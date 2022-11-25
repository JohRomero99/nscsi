<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\actualizarCorreo;
use App\Http\Requests\actualizarContrasena;
use App\Http\Requests\completarPerfil;
use Illuminate\Support\Facades\Hash;
use App\Models\nsc_estado_pasos_perfil;
use App\Models\Persona;
use App\Models\Representante;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Crypt;

class completarPerfilController extends Controller
{

    // Vista para actualizar la contraseña.
    public function vistaActualizarContrasena(){

        return view('auth.actualizarContrasena');

    }


    // Actualiza la contraseña.
    public function datosActualizarContrasena(actualizarContrasena $request){

        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with("exito", "Contrasena actualizada con exito");

    }


    // Vista para actualizar Perfil
    public function vistaActualizarPerfil($id){

        $user = User::find($id);
    
        return view('auth.completarPerfil' ,compact('user'));

    }


    // Guardar información que se envía por la vista perfil.
    public function datosActualizarPerfil(completarPerfil $request, $id){

        $persona = Persona::find($id);
        $persona->update($request->all());
        $persona->save();

        $paso = nsc_estado_pasos_perfil::where('user_id','=',$persona->representante->user_id)->first();
        $paso->pasos_perfil_id = 2;
        $paso->save();

        return redirect()->route("representante.home");

    }

    // Vista para actualizar Correo electrónico.
    public function vistaActualizarCorreo(){

        return view("auth.completarCorreo");

    }

    // Vista para guardar el correo electrónico.
    public function datosActualizarCorreo(actualizarCorreo $request){

        $user = User::find(Auth::user()->id);
        $user->email = $request->email;
        $user->save();

        $persona = Persona::where("cedula",'=',$user->name)->first();
        $persona->correo = $request->email;
        $persona->save();

        // event(new Registered($user));

        return back()->with("exito", "Correo actualizado con exito");

    }

    // Relacion de Usuario y Persona en la tabla "nsc_representante"
    public function relacionPersonaUser(){
        
        $user = User::find(Auth::user()->id);
        $persona = Persona::where('cedula','=',$user->name)->first();

        $representante = new Representante();
        $representante->persona_id = $persona->id;
        $representante->user_id = $user->id;
        $representante->save();
    
        return redirect()->route('representante.home');

    }

    public function relacionUserPerfil(){

        $pasos = new nsc_estado_pasos_perfil();
        $pasos->user_id = Auth::user()->id;
        $pasos->save();

        return redirect()->route('representante.home');

    }

}
