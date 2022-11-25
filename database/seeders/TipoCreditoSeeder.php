<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\cob_tipo_credito;

class TipoCreditoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cob_tipo_credito::create([
            'paymentez_id' => '0',
            'tipo_credito' => 'pago rotativo'
        ]);

        cob_tipo_credito::create([
            'paymentez_id' => '2',
            'tipo_credito' => 'pago con intereses'
        ]);

        cob_tipo_credito::create([
            'paymentez_id' => '3',
            'tipo_credito' => 'pagos sin intereses'
        ]);
    }
}
