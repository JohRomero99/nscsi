<?php

namespace App\Http\Controllers\Representante\PasarelaPagos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\EstudianteRepresentante;
use App\Models\cob_estado_cuenta;
use App\Models\cob_concepto_cobro;

class homeController extends Controller
{
    // Controlador hacia la vista Home.
    public function home(){

        $datos = []; $cedulas = []; $total_deuda = 0; $pensi_canceladas = 0; $total_pensiones = 0; $total = []; $progreso = [];
        $representante_id = Auth::user()->representante->id;
        $ci = EstudianteRepresentante::where('representante_id','=',$representante_id)->get();
        $total = cob_concepto_cobro::all()->count();
    
        for($i = 0; $i < $ci->count(); $i++){
            $cedulas[$i] = cob_estado_cuenta::where('estudiante_id','=',$ci[$i]->estudiante->persona->cedula)->get();
            $k = $cedulas[$i]->count();
            $datos[$i] = $ci[$i]->estudiante->persona; 
            for( $j = 0 ; $j < $k; $j++ ){
                if( $cedulas[$i][$j]->estado == "pendiente"){
                    $total_deuda = $total_deuda + $cedulas[$i][$j]->valor_a_tomar;
                }
                if( $cedulas[$i][$j]->estado == "cancelado"){
                    $pensi_canceladas++;
                }
            }
            $total_pensiones = $total_pensiones + $pensi_canceladas;
            $progreso[$i] = (int)((100 * $pensi_canceladas)/($total)); 
            $pensi_canceladas = 0;
        }   
        return view("representante.pasarelaPagos.home", compact('datos','total_pensiones','total_deuda','progreso'));
    }
}
