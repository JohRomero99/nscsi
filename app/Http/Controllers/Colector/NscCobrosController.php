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
use App\Http\Requests\registrarCobro;

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

    public function index()
    {

        $estadoDeCuenta = "null";
        return view('colector.index',compact('estadoDeCuenta'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(registrarCobro $request)
    {

        try {
            $name = explode(' ' ,$request->nombres);
            $ci = Persona::where('primer_nombre','=',$name[0])
                ->where('segundo_nombre','=',$name[1])
                ->where('apellido_paterno','=',$name[2])
                ->where('apellido_materno','=',$name[3])
                ->first();
    
            return redirect()->route('colector.editar',[
                'ci' => $ci->estudiante->id
            ]);
        } catch (\Throwable $th) {
            return back()->with('error','Estudiante no encontrado');
        }

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
        $estudiantes = DB::select('call nombresCompletos(?)', [
            $term
        ]);

        for($i = 0; $i < count($estudiantes); $i++){
            $data[] = [
                'label' => $estudiantes[$i]->persona,
            ];
        }

        return $data;
        // $estudiantes = Persona::where('primer_nombre', 'LIKE', '%' .$term . '%')->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nsc_cobros  $nsc_cobros
     * @return \Illuminate\Http\Response
     */
    public function edit($ci)
    {
        $estadoDeCuenta = cob_estado_cuenta::where('estudiante_id','=',$ci)->paginate(10);
        return view('colector.index',compact('estadoDeCuenta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nsc_cobros  $nsc_cobros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $nuevoSaldo = $request->saldoCuenta[0] - $request->saldo;
        if($nuevoSaldo < 0){
            for ($i = 0; $i < count($request->id); $i++) { 
                $nuevoSaldo = $request->saldoCuenta[$i] - $request->saldo;
                if($nuevoSaldo <= 0){
                    $estadoDeCuenta = cob_estado_cuenta::find($request->id[$i]);
                    $estadoDeCuenta->saldo = 0;
                    $estadoDeCuenta->save();
                }else{
                    $estadoDeCuenta = cob_estado_cuenta::find($request->id[$i]);
                    $estadoDeCuenta->saldo = $nuevoSaldo;
                    $estadoDeCuenta->save();
                    break;
                }
                $nuevoSaldo = ($nuevoSaldo) * -1;
            }
        }else{
            $estadoDeCuenta = cob_estado_cuenta::find($request->id[0]);
            $estadoDeCuenta->saldo = $nuevoSaldo;
            $estadoDeCuenta->save();
        }

        return redirect()->back()->with('exito','Cobro generado con exito');
        return $request->all();
        // $cobro = nsc_cobro::create([
        //     'concepto_cobro_id' => $request,
        //     'estado_cuenta_id' => $request,
        //     'representante_id' => $request,
        //     'fecha_cobro' => $request->fecha,
        //     'estudiante_id' => $request,
        //     'valor' => $request->saldo, 
        //     'n_factura' => $request->n_factura,
        //     'concepto' => $request,
        // ]);

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
