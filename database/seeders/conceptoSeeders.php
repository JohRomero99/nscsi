<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\concepto;

class conceptoSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $concepto = concepto::create([
            'concepto' => 'Pensión Básica 160 - Abril 2026',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $concepto = concepto::create([
            'concepto' => 'Pensión Básica 160 - Mayo 2026',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $concepto = concepto::create([
            'concepto' => 'Pensión Básica 160 - Junio 2026',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $concepto = concepto::create([
            'concepto' => 'Pensión Básica 160 - Julio 2026',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $concepto = concepto::create([
            'concepto' => 'Pensión Básica 160 - Agosto 2026',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $concepto = concepto::create([
            'concepto' => 'Pensión Básica 160 - Septiembre 2026',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $concepto = concepto::create([
            'concepto' => 'Pensión Básica 160 - Octubre 2026',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $concepto = concepto::create([
            'concepto' => 'Pensión Básica 160 - Noviembre 2026',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $concepto = concepto::create([
            'concepto' => 'Pensión Básica 160 - Diciembre 2026',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $concepto = concepto::create([
            'concepto' => 'Pensión Básica 160 - Enero 2027',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);
    }
}
