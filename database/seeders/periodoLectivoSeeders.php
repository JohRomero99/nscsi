<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\periodoLectivo;

class periodoLectivoSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pensiones = pensiones::create([
            'ano_lectivo' => '2026 - 2027',
            'estado' => '',
        ]);

        $pensiones = pensiones::create([
            'ano_lectivo' => '2027 - 2028',
            'estado' => '',
        ]);

        $pensiones = pensiones::create([
            'ano_lectivo' => '2029 - 2030',
            'estado' => '',
        ]);

        $pensiones = pensiones::create([
            'ano_lectivo' => '2030 - 2031',
            'estado' => '',
        ]);

    }
}
