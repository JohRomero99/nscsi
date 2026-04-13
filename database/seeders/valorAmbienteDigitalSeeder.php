<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\valorAmbienteDigital;
use App\Models\periodoLectivo;

class valorAmbienteDigitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $periodo = periodoLectivo::where('ano_lectivo', '2026 - 2027')->first();

        $valorAmbienteDigital = valorAmbienteDigital::create([
            'valor_ambiente_digital' => '--seleccionar--',
            'periodo_lectivo_id' => $periodo->id,
            'estado' => '',
        ]);

        $valorAmbienteDigital = valorAmbienteDigital::create([
            'valor_ambiente_digital' => '35',
            'periodo_lectivo_id' => $periodo->id,
            'estado' => '',
        ]);

    }
}
