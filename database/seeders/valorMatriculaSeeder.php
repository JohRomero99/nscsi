<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\valorMatriculacion;

class valorMatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matriculacion = valorMatriculacion::create([
            'matriculacion_valor' => '--seleccionar--',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $matriculacion = valorMatriculacion::create([
            'matriculacion_valor' => '100.00',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $matriculacion = valorMatriculacion::create([
            'matriculacion_valor' => '90.00',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $matriculacion = valorMatriculacion::create([
            'matriculacion_valor' => '80.00',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);
        
        $matriculacion = valorMatriculacion::create([
            'matriculacion_valor' => '70.00',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $matriculacion = valorMatriculacion::create([
            'matriculacion_valor' => '60.00',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $matriculacion = valorMatriculacion::create([
            'matriculacion_valor' => '50.00',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $matriculacion = valorMatriculacion::create([
            'matriculacion_valor' => '40.00',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $matriculacion = valorMatriculacion::create([
            'matriculacion_valor' => '30.00',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $matriculacion = valorMatriculacion::create([
            'matriculacion_valor' => '20.00',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $matriculacion = valorMatriculacion::create([
            'matriculacion_valor' => '10.00',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $matriculacion = valorMatriculacion::create([
            'matriculacion_valor' => 'Otro',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);
    }
}
