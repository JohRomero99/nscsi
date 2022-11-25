<?php

namespace App\Http\Controllers\Colector;

use App\Http\Controllers\Controller;
use App\Models\nsc_cobros;
use App\Models\Persona;
use App\Models\Estudiante;
use App\Models\cob_estado_cuenta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class NscCobrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('can:colector.home')->only('index');
    }

    public function index(Request $request)
    {
        $estadoDeCuenta = cob_estado_cuenta::all();
        return view('colector.index', compact('estadoDeCuenta'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        // $cobro = 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nsc_cobros  $nsc_cobros
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data = [];
        $term = $request->get('term');
        // $estudiantes = Persona::where('primer_nombre', 'LIKE', '%' .$term . '%')->get();
        $estudiantes = DB::select('call nombresCompletos(?)', [
            $term
        ]);

        for($i = 0; $i < count($estudiantes); $i++){
            $data[] = [
                'label' => $estudiantes[$i]->persona,
            ];
        }

        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nsc_cobros  $nsc_cobros
     * @return \Illuminate\Http\Response
     */
    public function edit(nsc_cobros $nsc_cobros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nsc_cobros  $nsc_cobros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nsc_cobros $nsc_cobros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nsc_cobros  $nsc_cobros
     * @return \Illuminate\Http\Response
     */
    public function destroy(nsc_cobros $nsc_cobros)
    {
        //
    }
}
