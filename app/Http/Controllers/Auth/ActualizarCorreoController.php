<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\actualizarCorreo;

class ActualizarCorreoController extends Controller
{
    public function correo(ActualizarCorreo $request){
        
        try {

            $user = User::find(Auth::user()->id);
            $user->email = $request->email;
            $user->email_verified_at = null;
            $user->save();

            event(new Registered($user));

            return redirect()->route('verification.notice')->with('mensaje','Correo Registrado correctamente');

        } catch (\Throwable $th) {
            
            return back()->withInput(); 

        }

    }
}
