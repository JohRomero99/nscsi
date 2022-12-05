<?php

namespace App\Http\Controllers\Representante\PasarelaPagos\Paymentez;

use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cob_estado_cuenta;
use App\Models\personalizarTotal;
use App\Models\cob_valores_max_diferir;
use App\Models\pay_tarjetas_agregadas;
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
        $ci = Persona::find($id);
        $resultado = cob_estado_cuenta::where('estudiante_id','=',$id)->where('estado','=','pendiente')->get(); //Busqueda de un estudiante en la tabla "cob_estado_cuenta".
        if(is_null($resultado)) // Si la variable retorna un valor de null se hace una búsqueda en la tabla "cob_descuento_estudiante" ya que la pensión que paga este estudiante es personalizada.
            $resultado = cob_descuento_estudiante::where('estudiante_id','=','0955546602')->where('estado','=','pendiente')->get();
        return view('representante.pasarelaPagos.estadoDeCuenta', compact('resultado','ci','userId'));

    }

    public function personalizarTotal(Request $request){

        try {

            if($request->get("id") == null)
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
                $array = json_encode($request->get("id"));
                $personalizarTotal = personalizarTotal::create([
                    'user_id' => $request->user_id,
                    'descripcion' => $array,
                ]);

            return redirect()->route('personalizarTotalVista', $request->user_id);

        } catch (\Exception $e) {
            $cardsList->throwIf(
                \Log::info('Fallo',['error' => $cardsList]),
            );
            \Log::debug('Fallo '. $e->getMessage());
            abort(404);
        }
    }

    public function personalizarTotalVista($id){

        $estadoDeCuenta = []; $total = 0;
        $personalizarTotal = personalizarTotal::where('user_id','=',$id)->first(); //Buscamos el ID del usuario actual y los meses de pensiones que seleccionó.
        $array = json_decode($personalizarTotal->descripcion); // Transformamos el los ID nuevamente en un array.
        for($i = 0; $i < count($array); $i++){ // Iteramos y buscamos cada una de las pensiones por medio del ID.
            $estadoDeCuenta[$i] = cob_estado_cuenta::select("*")->where("id",'=',$array[$i])->first();
            $total = $total + $estadoDeCuenta[$i]->valor_a_tomar; //Sumamos el total de las pensiones seleccionadas.
        }
        
        $id = personalizarTotal::select('*')->where('user_id','=',$id)->first(); //Buscamos el ID usuario con los ID de las pensiones que seleccionó previamnete.
        $id->delete(); //Procedemos a eliminarlos.
        return view('representante.pasarelaPagos.personalizarTotal', compact('estadoDeCuenta','total'));

    }

    public function metodoPago(Request $request){

        // return $request->all();

        $request->validate([
            'total' => 'required',
        ]);

        $personalizarTotal = personalizarTotal::create([
            'user_id' => Auth::user()->id,
            'descripcion' => json_encode($request->get('id')),
            'saldo' => json_encode($request->get('saldo')),
            'valor_adeudado' => json_encode($request->get('total'))
        ]);

        return redirect()->route('metodoPago.vista');
        
            // $saldos = $request->saldo; $nombre = $request->nombre; $apellido = $request->apellido; $id = $request->id;
            // $tarjetas = []; $contador = 0;

            // $result_size = $cardsList['result_size'];
            // $total = $request->total;
            // $total = Crypt::encryptString($total);

            // return view('representante.pasarelaPagos.metodoPago', compact('saldos','tarjetas','contador','total','id','nombre','apellido'));

    }

    public function metodoPagoVista(){

        $cardsList = Http::withHeaders([
            'Auth-Token' => auth_token()
        ])->GET('https://ccapi-stg.paymentez.com/v2/card/list',[
            'uid' => Auth::user()->code_paymentez
        ]);

        $tarjetas = [];
        for( $i = 0; $i < $cardsList['result_size']; $i++){
            if($cardsList['cards'][$i]['status'] == "valid"){
                $tarjetas[$i] = pay_tarjetas_agregadas::select('*')->where('token','=',$cardsList['cards'][$i]['token'])->first();
            }    
        }

        return view('representante.pasarelaPagos.metodoPago', compact('tarjetas'));

    }

    
    public function pay(Request $request){

        return $request->all();        

        // $personalizarTotal = personalizarTotal::select('*')->where('user_id','=',$id)->first();
        // $idPensiones = json_encode($personalizarTotal->descripcion);
        // $saldos = json_encode($personalizarTotal->saldo);
        // $total = json_encode($personalizarTotal->total);

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


}
