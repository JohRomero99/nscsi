<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class verificarRol
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
        $userb = User::with('roles')->where('id', Auth::user()->id)->first();

        $role = isset($userb->roles->first()->name) ?  $userb->roles->first()->name : 'No Role'; 

        switch ($role) {
            case 'admin':
                return redirect()->route('admin.home');
                break;
            case 'docente':
                return redirect()->route('docente.home');
                break;
            case 'docente_tutor':
                return redirect()->route('docente.home');
                break;
            case 'docente_revisor':
                return redirect()->route('docente.home');
                break;
            case 'colector':
                return redirect()->route('colector.home');
                break;
            case 'representante':
                return redirect()->route("representante.home");
                break;
            case 'representante_invitado':
                return redirect()->route('representanteInvitado.paso-1');
                break;
            default:
                return $next($request);
                break;
        }
    }
}
