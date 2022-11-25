<?php

namespace App\Http\Controllers\Representante\PasarelaPagos\Paymentez;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\pay_tarjetas_agregadas;
use Illuminate\Http\Request;
use DateTime;

class eliminarTarjetaController extends Controller
{
    public function deletecard($token){

        try {
        
            // Consulta API "Eliminar tarjeta".
            $paymentez = paymentez();
            $deleteCard = Http::withHeaders([
                'Auth-Token' => auth_token()
            ])->POST($paymentez.'/v2/card/delete/',[
                'card' => [
                    'token' => $token
                ],
                'user' => [
                    'id' => Auth::user()->code_paymentez,
                ],
            ]);

            $tarjeta = pay_tarjetas_agregadas::where('token','=',$token)->first();
            $tarjeta->delete();

            return back()->with('eliminarCard','Tarjeta eliminada con éxito');
            
        } catch (\Exception $e) {
            $deleteCard->throwIf(
                \Log::info('Fallo',['error' => $deleteCard]),
                // \Log::info('Fallo',['error' => $cardsList->throw()]),
            );
            \Log::debug('Fallo'. $e->getMessage());
            abort(404);
        }
    }
}
