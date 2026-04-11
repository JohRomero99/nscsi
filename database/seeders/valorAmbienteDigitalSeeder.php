<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\valorAmbienteDigital;

class valorAmbienteDigitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $valorAmbienteDigital = valorAmbienteDigital::create([
            'valor_ambiente_digital' => '--seleccionar--',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $valorAmbienteDigital = valorAmbienteDigital::create([
            'valor_ambiente_digital' => '35',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

    }
}
