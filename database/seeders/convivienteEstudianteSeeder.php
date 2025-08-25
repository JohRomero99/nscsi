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
            'relacion_estudiante' => 'Con ambos Padres',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Madre',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Padre',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Abuelo',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Abuela',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Hermano',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Hermana',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Tío',
        ]);

        $convivienteEstudiante = convivienteEstudiante::create([
            'relacion_estudiante' => 'Tía',
        ]);
    }
}
