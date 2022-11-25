<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\cob_valor_actualizado;

class SaldoActualizadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cob_valor_actualizado::create([
            'estado' => 'Valor sin Actualizar',
        ]);

        cob_valor_actualizado::create([
            'estado' => 'Valor Actualizado',
        ]);
    }
}
