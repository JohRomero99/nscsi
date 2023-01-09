<?php

namespace App\Http\Controllers\representanteInvitado;

use App\Http\Controllers\Controller;
use App\Models\EstudianteRepresentante;
use App\Models\Representante;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class representanteInvitadoHome extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pasoUno(){

        $representanteId = Auth::user()->persona->representante->id;
        $relacionEstudinateRepresentante = EstudianteRepresentante::select('*')->where('representante_id','=',$representanteId)->get();
        $estudiante = $relacionEstudinateRepresentante[0]->estudiante;
        return view('representanteInvitado.representanteInvitado-paso-1', compact('estudiante'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pasoDos()
    {
        $representante = Auth::user()->persona;
        return view('representanteInvitado.representanteInvitado-paso-2', compact('representante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pasoTres(Request $request)
    {
        return view('representanteInvitado.representanteInvitado-paso-3');
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pasoCuatro(Request $request)
    {
        return view('representanteInvitado.representanteInvitado-paso-4');
    }

            /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pasoQuinto(Request $request)
    {
        return view('representanteInvitado.representanteInvitado-paso-5');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
