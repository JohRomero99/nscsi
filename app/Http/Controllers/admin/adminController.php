<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\editarUsuarios;
use App\Http\Requests\admin\crearUsuarios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class adminController extends Controller
{
    public function index(){

        $user = User::all();
        return view('admin.index', compact('user'));

    }

    public function create(){

        $role = Role::all();
        return view('admin.create', compact('role'));

    }

    public function edit($userId){

        $user = User::find($userId);
        $roles = Role::all();
        return view('admin.edit', compact('user', 'roles'));

    }

    public function store(crearUsuarios $request){

        $user = new User();
        $user->name = $request->input('primer_nombre');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('contrasena'));
        $user->save();

        $user->persona()->create([
            'cedula' => $request->input('cedula'),
            'primer_nombre' => $request->input('primer_nombre'),
            'segundo_nombre' => $request->input('segundo_nombre'),
            'apellido_paterno' => $request->input('apellido_paterno'),
            'apellido_materno' => $request->input('apellido_materno'),
            'telefono' => $request->input('telefono'),
        ]);

        $user->assignRole($request->rol);

        return redirect()->route('admin.index')->with('create', 'Usuario creado exitosamente.');

    }

    public function update($userId, editarUsuarios $request){

        //return $request->all();

        $user = User::find($userId);

        //$user->persona->cedula = $request->input('cedula');
        $user->persona->primer_nombre = $request->input('primer_nombre');
        $user->persona->segundo_nombre = $request->input('segundo_nombre');
        $user->persona->apellido_paterno = $request->input('apellido_paterno');
        $user->persona->apellido_materno = $request->input('apellido_materno');
        $user->persona->save();

        $user->email = $request->input('email');

        if ($request->input('checkbox') === 'on') {
            $user->password = Hash::make($request->contrasena);
        }

        $user->save();
        $user->syncRoles([$request->rol]);

        return redirect()->route('admin.index')->with('update', 'Usuario actualizado exitosamente.');

    }

    public function destroy($userId){

        $user = User::find($userId);
        $user->persona->delete();
        $user->delete();

        return redirect()->route('admin.index')->with('delete', 'Usuario eliminado exitosamente.');

    }
}
