<?php

namespace App\Http\Controllers\Representante\PasarelaPagos\Paymentez;

use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cob_estado_cuenta;
use App\Models\cob_valores_max_diferir;
use App\Models\cob_concepto_cobro;
use App\Models\cob_valores_estudiante;
use App\Models\cob_descuento_estudiante;
use App\Models\Persona;
use App\Models\cob_cuota_diferida;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Client\RequestException;

class CarritoController extends Controller
{
    public function cart(Request $request){

        // verificarSaldo();

        try {

            $resultado = cob_estado_cuenta::where('estudiante_id','=',$request->get('id'))->where('estado','=','Pendiente')->get();
            $ci = Persona::select('*')->where('id','=',$request->get('id'))->first();
            if(is_null($resultado)){

                $resultado = cob_descuento_estudiante::where('estudiante_id','=','0955546602')->get();

            }
            return view('representante.pasarelaPagos.carrito', compact('resultado','ci'));

        } catch (\Throwable $th) {

            return back()->with('error','error inesperado');

        }

    }

    public function resume(Request $request){

        $datos = []; $total = 0; $data_paymentez = [];
        $nombre = $request->nombre;
        $apellido = $request->apellido;

        try {

            if($request->id == null){
                return back()->with('error', 'Debe seleccionadar por lo menos un mes');
            } else {
                // Consultar si ya tiene tarjeta.
                $paymentez = paymentez();
                $cardsList = Http::withHeaders([
                    'Auth-Token' => auth_token()
                ])->GET($paymentez.'/v2/card/list',[
                    'uid' => Auth::user()->code_paymentez
                ]);

            }

            if( $cardsList['result_size'] == 0 ){
                return back()->with('info', 'Primero tienes que agregar una tarjeta para continuar con el proceso de pago');
            } else {
                for( $i = 0; $i < count($request->id); $i++ ){
                    $datos[$i] = cob_estado_cuenta::find($request->id[$i]);
                    $total += $datos[$i]['saldo'];
                }
            }
        
            return view('representante.pasarelaPagos.resumen', compact('datos','total','nombre','apellido'));

        } catch (\Exception $e) {
            $cardsList->throwIf(
                \Log::info('Fallo',['error' => $cardsList]),
            );
            \Log::debug('Fallo '. $e->getMessage());
            abort(404);
        }
    }

    public function pay(Request $request, $total){

        try {
            $saldos = $request->saldos; $nombre = $request->nombre; $apellido = $request->apellido; $id = $request->id;  
            if($request->cardList == null){
                return back()->with('error', 'Debe seleccionar una tarjeta para continuar');
            } else {
                $total = Crypt::decryptString($total);
                $token = $request->cardList[0];
                $vat = 0; $taxable_amount = 0.00; $tax_percentage = 0; $amount = $total; $subtotal = $total;
                $num = cob_valores_max_diferir::all();
                return view('representante.pasarelaPagos.pagoTarjeta', compact('saldos','nombre','apellido','amount', 'vat', 'taxable_amount','tax_percentage','token','id','subtotal','num'));
            }

        } catch (\Throwable $th) {
            return back()->with('error','error inesperado');
        }

    }

}
