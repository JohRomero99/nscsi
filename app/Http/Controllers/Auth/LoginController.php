<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'name';
    }

    public function authenticated($request , $user){

        $userb = User::with('roles')->where('id', $user->id)->first();

        $role = isset($userb->roles->first()->name) ?  $userb->roles->first()->name : 'No Role'; 

        /*if($role=='admin'){
            return redirect()->route('admin.home') ;
        }*/
        switch ($role) {
            case 'admin':
                return redirect()->route('admin.home');
                break;
            case 'colector':
                return redirect()->route('colector.home');
                break;
            case 'representante':
                return redirect()->route("representante.home");
                break;
            case 'representante_invitado':
                return redirect()->route('representanteInvitado.home');
                break;
            default:
                return redirect()->route('home');
                break;
        }
    }

}
