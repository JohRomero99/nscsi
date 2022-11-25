<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Persona;
use App\Models\Representante;
use Illuminate\Support\Facades\Auth;

class verificarPerfilPasos
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $user = User::find(Auth::user()->id);

        if( is_null($user->perfil)){

            return redirect()->route("relacion-user-perfil");

        }

        if( is_null($user->representante)){

            return redirect()->route("relacion-persona-user");

        }

        switch ($user->perfil->pasos_perfil_id) {
            case '1':
                return redirect()->route("vista-actualizar-perfil", $user->id)
                    ->with("completar","Termina de completar tu perfil para porder continuar");
                break;
            case '2':
                return $next($request);
                break;
            default:
                return $next($request);
                break;
        }
        
    }
}
