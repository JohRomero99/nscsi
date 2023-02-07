<?php

namespace Database\Seeders;

use App\Models\nscMetodoPagoPensiones;
use Illuminate\Database\Seeder;

class nscMetodoPagoPensionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        nscMetodoPagoPensiones::create([
            'metodo_pago_pensiones' => 'Pago total anual TC a 6 meses sin intereses (matrícula gratis)',
        ]);

        nscMetodoPagoPensiones::create([
            'metodo_pago_pensiones' => 'Pago total anual TC a 10 meses sin intereses (plataforma gratis)',
        ]);

        nscMetodoPagoPensiones::create([
            'metodo_pago_pensiones' => 'Pago total anual con transferencia bancaria (matrícula gratis)',
        ]);

        nscMetodoPagoPensiones::create([
            'metodo_pago_pensiones' => 'Pago total anual efectivo en Colecturía (matrícula gratis)',
        ]);

        nscMetodoPagoPensiones::create([
            'metodo_pago_pensiones' => 'Pago mensual transferencia bancaria',
        ]);

        nscMetodoPagoPensiones::create([
            'metodo_pago_pensiones' => 'Pago mensual tarjeta de crédito',
        ]);

        nscMetodoPagoPensiones::create([
            'metodo_pago_pensiones' => 'Pago mensual efectivo en Colecturía',
        ]);

        nscMetodoPagoPensiones::create([
            'metodo_pago_pensiones' => 'Pago mensual recaudación a domicilio',
        ]);
    }
}
