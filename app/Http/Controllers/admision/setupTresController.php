<?php

namespace App\Http\Controllers\admision;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\crearUsuarioMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class setupTresController extends Controller
{
    /**
     * Muestra la vista de confirmación de los datos ingresados.
     */
    public function email($userId){

        $user = User::find($userId);
        $primerNombre = $user->persona->primer_nombre;

        return view('admision.confirmacion', compact('userId','primerNombre'));

    }

    public function reenviarEmail($userId){

        // Generar una contraseña y despues se cifra la contraseña.
        $randomContrasena = Str::random(10);
        $hashedContrasena = Hash::make($randomContrasena);

        $user = User::find($userId);
        $user->update([
            'password' => $hashedContrasena,
        ]);

        Mail::to('soporte.tecnico.2@nsc.edu.ec')->send(new crearUsuarioMail($user, $randomContrasena));
        //return redirect()->route('admision.representante.email',['userId' => $user->id])->with('email', 'Mensaje reenviado');
    }


}
