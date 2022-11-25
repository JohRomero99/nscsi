<?php

namespace App\Http\Controllers\Representante;
use Illuminate\Support\Facades\Storage;

use Validator, Input, Redirect; 
use App\Models\Persona;
use App\Models\User;
use App\Models\Representante;
use App\Models\Estudiante;
use App\Models\AyMContacto;
use App\Models\AyMAspiranteDatos;
use App\Models\EstudianteRepresentante;
use App\Models\LugarNacimiento;
use App\Models\Nacionalidad;
use App\Models\AyMInstitucionesEducativas;
use App\Models\AyMAcademicoAspirante;
use App\Models\AyMOtrasInstitucionesEducativas;
use App\Models\SaludPersona;
use App\Models\NscDetalleDatosSalud;
use App\Models\Parentesco;
use App\Http\Controllers\Controller;
use App\Models\cob_estado_cuenta;
use App\Models\cob_concepto_cobro;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
Use Alert;

class RepresentanteController extends Controller
{
    public function __construct(){
        $this->middleware('can:representante.home')->only('index');
       
    }
    public function index(){

        //$userb = User::with('roles')->where('id', auth()->user()->id)->first();
        //$role = isset($userb->roles->first()->name) ?  $userb->roles->first()->name : 'No Role';

        $representante = Representante::where('user_id', auth()->user()->id)->get()->first();

        $estudiante_repre = EstudianteRepresentante::select('estudiante_id')->where('representante_id',$representante->id )->get();
        
        $estudiantes = Estudiante::whereIn('id', $estudiante_repre->toArray())->get();
        
        return view("representante.index")->with(compact('representante', 'estudiantes'));

    }

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
