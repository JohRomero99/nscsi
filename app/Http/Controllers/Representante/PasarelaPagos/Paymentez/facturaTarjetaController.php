<?php

namespace App\Http\Controllers\Representante\PasarelaPagos\Paymentez;

use App\Http\Controllers\Controller;
use App\Models\cob_voucher;
use App\Models\cob_cuota_diferida;
use App\Models\cob_card_transaction;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class facturaTarjetaController extends Controller
{
    // Generar documento PDF a partir de la factura.
    public function downloadPdf(Request $request, $transaction){

        try {
            
            $voucher = cob_voucher::where('transaction_reference','=',$transaction)->first();
            $diferido = cob_cuota_diferida::find($voucher->cuota_id);
            view()->share('representante.pasarelaPagos.pdf',$voucher, $diferido);
            $pdf = PDF::loadView('representante.pasarelaPagos.pdf', ['voucher' => $voucher, 'diferido' => $diferido]);
            return $pdf->download('representante.pasarelaPagos.pdf');

        } catch (\Throwable $th) {
            
            return back()->with('error','error inesperado');

        }

    }

    //Generar una factura a partir del cobro.
    public function facture($id){

        try {

            $voucher = cob_voucher::find($id);
            $limite = count($voucher->cobro);
            return view('representante.pasarelaPagos.factura', compact('voucher','limite'));

        } catch (\Throwable $th) {
          
            return back()->with('error','error inesperado');

        }

    }
}

