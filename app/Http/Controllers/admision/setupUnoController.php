<?php

namespace App\Http\Controllers\admision;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\persona;
use App\Models\representante;
use App\Http\Requests\admisionRequest;

class setupUnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Muestra la página admisiones.
     */
    public function create()
    {
        return view('admision.setupUno');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(admisionRequest $request)
    {

        $persona = Persona::where('cedula', $request->input('cedula'))->first();

        if (is_null($persona?->user?->id)){
            if (!$persona) {
                $persona = persona::create($request->all());
                $representante = representante::create([
                    'persona_id' => $persona->id,
                ]);
                $representante = $representante->id;
            }else{
                $persona->update($request->all());
                $representante = $persona->representante->id;
            }
            return redirect()->route('admision.estudiante.create',['id' => $representante, 'email' => $request->email, 'numeroInscripion' => $request->numero_inscripion])->with('representante','Datos Guardados con éxito');
        }else{
            return redirect()->route('admision.representante.create')->with('info', 'Ya tienes registro creado, por favor, revisa tu bandeja de entrada');
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
    public function edit($id)
    {

        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        //

    }
}
