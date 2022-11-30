<?php

use Illuminate\Support\Facades\Auth;
use App\Models\UsrCodigoUsuario;
use App\Models\AyMContacto;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use App\Models\cob_concepto_cobro;
use App\Models\cob_estado_cuenta;
use App\Models\Estudiante;
use App\Models\Persona;
use App\Models\EstudianteRepresentante;
use Carbon\Carbon;
use App\Models\pay_url_paymentez;
// use DateTime;

// Token para las API de paymentez.
function auth_token(){

    $server_application_code = config('services.paymentez.key_server');
    $server_app_key = config('services.paymentez.key_token_server');
    $date = new DateTime();
    $unix_timestamp = $date->getTimestamp();
    $uniq_token_string = $server_app_key.$unix_timestamp;
    $uniq_token_hash = hash('sha256', $uniq_token_string);
    $auth_token = base64_encode($server_application_code.";".$unix_timestamp.";".$uniq_token_hash);
    return $auth_token;

}

// Generar número de factura para los pagos.
function numero_factura(){

    $date = date_create();
    $p_year = date_format($date, 'Y');
    $p_month = date_format($date, 's');
    $p_ramdon = Str::random(8);

    $p_number = $p_year.'-'.$p_month.''.$p_ramdon;
    return $p_number;

}

// Url de Pruebas Ambiente y Produccion
function paymentez(){

    $paymentez = pay_url_paymentez::all();

    foreach( $paymentez as $u ){
        if($u->estado == "ACTIVO"){
            return $u->url;
        }
    }

}


//Verificar si venció un mes de pensión y actualizar de valor normal a descontado.
function verificarSaldo(){

    $fecha_actual= Carbon::now();
    $vigencia = [];
    $fechaVigencia = [];
    $diferencia = [];
    
    $id = Auth::user()->representante->id;
    $estudianteRepresentante = EstudianteRepresentante::select("estudiante_id")->where("representante_id","=",$id)->get();

    for($i = 0; $i < count($estudianteRepresentante); $i++){
        $estudiante = Estudiante::find($estudianteRepresentante[$i]->estudiante_id);
        $actualizar = cob_estado_cuenta::where("estudiante_id","=",$estudiante->persona->cedula)->get();
        for( $i = 0; $i < count($actualizar); $i++){
            $fechaVigencia[$i] = Carbon::parse($actualizar[$i]->cob_cobro->fecha_vencimiento);
            if($actualizar[$i]->estado == "pendiente"){
                if($fecha_actual->gt($fechaVigencia[$i])){
                    if( $actualizar[$i]->valor_actualizado == 1 ){
                        $diferencia[$i] = $actualizar[$i]->valor_descontado - $actualizar[$i]->valor_normal;
                        $actualizar[$i]->valor_a_tomar = $actualizar[$i]->valor_descontado;
                        $actualizar[$i]->saldo = $actualizar[$i]->saldo + $diferencia[$i];
                        $actualizar[$i]->valor_actualizado = 2;
                        $actualizar[$i]->save();
                    }
                }
            }
        }
    }
}

// Nombres Completos
function nombresCompletos($ci){
    $nombresCompletos = Persona::where('cedula','=',$ci)->first();
    return $nombresCompletos->primer_nombre ." " .$nombresCompletos->segundo_nombre ." " .$nombresCompletos->apellido_paterno ." " .$nombresCompletos->apellido_materno;
}

