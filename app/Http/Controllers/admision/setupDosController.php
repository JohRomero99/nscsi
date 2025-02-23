<?php

namespace App\Http\Controllers\admision;

use App\Http\Controllers\Controller;
use App\Models\estudianteRepresentante;
use Illuminate\Http\Request;
use App\Models\estudiante;
use App\Models\persona;
use App\Models\anioAcademico;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\crearUsuarioMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Requests\admisionRequest;

class setupDosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id, $email, $numeroInscripion)
    {

        $numeroEstudiante = $numeroInscripion;
        $anio_academico = anioAcademico::all();
        return view('admision.setupDos', compact('id','email','anio_academico','numeroEstudiante'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(admisionRequest $request, $id, $email)
    {

        $data = $request->all();
        $personas = [];

        foreach ($data['cedula'] as $index => $cedula) {
            $personas[] = [
                'cedula' => $cedula,
                'primer_nombre' => $data['primer_nombre'][$index] ?? null,
                'segundo_nombre' => $data['segundo_nombre'][$index] ?? null,
                'apellido_paterno' => $data['apellido_paterno'][$index] ?? null,
                'apellido_materno' => $data['apellido_materno'][$index] ?? null,
                // Añade otros campos según sea necesario.
            ];
        }

        for ( $i = 0; $i < count($personas) ; $i++) { 
            $x[$i] = persona::create($personas[$i]);
            $estudiante = estudiante::create([
                'persona_id' => $x[$i]['id'],
            ]);
            $estudianteRepresentante = estudianteRepresentante::create([
                'estudiante_id' => $estudiante->id,
                'representante_id' => $id,
            ]);
        }

        // Generar una contraseña y despues se cifra la contraseña.
        $randomContrasena = Str::random(10);
        $hashedContrasena = Hash::make($randomContrasena);
        $user = User::create([
            'name' => $estudianteRepresentante->representante->persona->primer_nombre,
            'email' => $email,
            'password' => $hashedContrasena,
        ]);

        $estudianteRepresentante->representante->persona()->update(['user_id' => $user->id]);
        Mail::to('soporte.tecnico.2@nsc.edu.ec')->send(new crearUsuarioMail($user, $randomContrasena));
        return redirect()->route('admision.representante.create')->with('estudiante', 'Datos guardados con éxito por favor revise su bandeja de entrega');

    }

    /**
     * Función para duplicar otro formularió en el setup 2.
     */
    public function formularioDuplicar()
    {
        $action = $request->input('action');
        $formularios = $request->input('formulario');

        if ($action === 'add') {
            // Agregar un formulario vacío
            $newIndex = count($formularios);
            $formularios[$newIndex] = ['cedula' => '', 'primer_nombre' => '', 'segundo_nombre' => '', 'apellido_paterno' => '', 'apellido_materno' => '', 'fecha_nacimiento' => '', 'ano_basica' => ''];
            return view('formulario', [
                'formularios' => $formularios,
                'anio_academico' => AnioAcademico::all()
            ]);
        }

        if ($action === 'submit') {
            // Procesar los datos o guardarlos en la base de datos
            return redirect()->route('formulario.show')->with('success', 'Formularios enviados correctamente.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Función que me permite crear formularios de acuerdo 
     * a el número del representante
     */
    // public function crearFormulario(Request $request)
    // {


    // }
}
