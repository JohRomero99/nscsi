<?php

namespace App\Http\Controllers\Representante\PasarelaPagos\Paymentez;

use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cob_estado_cuenta;
use App\Models\personalizarTotal;
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
    public function estadoDeCuenta($id){

        $userId = Auth::user()->id;
        $resultado = cob_estado_cuenta::where('estudiante_id','=',$id)->where('estado','=','pendiente')->get();
        $ci = Persona::find($id);
        if(is_null($resultado))
            $resultado = cob_descuento_estudiante::where('estudiante_id','=','0955546602')->where('estado','=','pendiente')->get();
        return view('representante.pasarelaPagos.estadoDeCuenta', compact('resultado','ci','userId'));

    }

    public function personalizarTotal(Request $request){

        // return $request->all();

        // try {

            if($request->id == null)
                return back()->with('error', 'Debe seleccionadar por lo menos un mes');
            else
                // Consultar si ya tiene tarjeta.
                $paymentez = paymentez();
                $cardsList = Http::withHeaders([
                    'Auth-Token' => auth_token()
                ])->GET($paymentez.'/v2/card/list',[
                    'uid' => Auth::user()->code_paymentez
                ]);


            if( $cardsList['result_size'] == 0 )
                return back()->with('info', 'Primero tienes que agregar una tarjeta para continuar con el proceso de pago');
            else 
                // for($i = 0; $i < count($request->id); $i++){
                //     $personalizarTotal = new personalizarTotal();
                //     $personalizarTotal->user_id = $request->user_id;
                //     $personalizarTotal->descripcion = $request->descripcion[$i];
                //     $personalizarTotal->fecha_vencimiento = $request->fecha_vencimiento[$i];
                //     $personalizarTotal->valor_adeudado = $request->valor_adeudado[$i];
                //     $personalizarTotal->saldo = $request->saldo[$i];
                //     $personalizarTotal->save();
                // }

                // $array = json_decode($data]);
                $personalizarTotal = personalizarTotal::create([
                    'user_id' => $request->user_id,
                    'descripcion' => $array,
                ]);

            return redirect()->route('personalizarTotalVista', $request->user_id);

        // } catch (\Exception $e) {
        //     $cardsList->throwIf(
        //         \Log::info('Fallo',['error' => $cardsList]),
        //     );
        //     \Log::debug('Fallo '. $e->getMessage());
        //     abort(404);
        // }
    }

    public function personalizarTotalVista($id){

        $personalizarTotal = personalizarTotal::where('user_id','=',$id)->get();
        return $personalizarTotal;
        return view('representante.pasarelaPagos.resumen', compact('datos','total','nombre','apellido'));

    }

    public function pay(Request $request, $total){

        $saldos = $request->saldos; $nombre = $request->nombre; $apellido = $request->apellido; $id = $request->id;  
        if($request->cardList == null)
            return back()->with('error', 'Debe seleccionar una tarjeta para continuar');
        else
            $total = Crypt::decryptString($total);
            $token = $request->cardList[0];
            $vat = 0; $taxable_amount = 0.00; $tax_percentage = 0; $amount = $total; $subtotal = $total;
            $num = cob_valores_max_diferir::all();
            return view('representante.pasarelaPagos.pagoTarjeta', compact('saldos','nombre','apellido','amount', 'vat', 'taxable_amount','tax_percentage','token','id','subtotal','num'));
        

    }

    public function metodoPago(Request $request){

        $request->validate([
            'total' => 'required',
        ]);
        
        try {

            $saldos = $request->saldo; $nombre = $request->nombre; $apellido = $request->apellido; $id = $request->id;
            $tarjetas = []; $contador = 0;

            $cardsList = Http::withHeaders([
                'Auth-Token' => auth_token()
            ])->GET('https://ccapi-stg.paymentez.com/v2/card/list',[
                'uid' => Auth::user()->code_paymentez
            ]);

            for( $i = 0; $i < $cardsList['result_size']; $i++){
                if($cardsList['cards'][$i]['status'] == "valid"){
                    $tarjetas[$i] = $cardsList['cards'][$i];
                    $contador = $contador + 1;
                }    
            }

            $result_size = $cardsList['result_size'];
            $total = $request->total;
            $total = Crypt::encryptString($total);

            return view('representante.pasarelaPagos.metodoPago', compact('saldos','tarjetas','contador','total','id','nombre','apellido'));

        } catch (\Throwable $th) {
            
            return back()->with('error','error inesperado');

        }

    }

}
