<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\convivienteEstudiante;

class convivienteEstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => '--seleccionar--',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Padre',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Madre',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Abuelo paterno',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Abuela paterna',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Abuelo materno',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Abuela materna',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Bisabuelo paterno',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Bisabuela paterna',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Bisabuelo materno',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Bisabuela materna',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Hermano',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Hermana',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Tío paterno',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Tía paterna',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Tío materno',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Tía materna',
        ]);

    }
}
