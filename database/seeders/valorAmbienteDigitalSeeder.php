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
            'estado' => '',
        ]);

        $valorAmbienteDigital = valorAmbienteDigital::create([
            'valor_ambiente_digital' => '35',
            'estado' => '',
        ]);

    }
}
