<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\anioAcademico;

class anioAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $anio = anioAcademico::create([
            'anio_basica' => '--seleccionar--',
        ]);

        $anio = anioAcademico::create([
            'anio_basica' => 'Inicial',
        ]);

        $anio = anioAcademico::create([
            'anio_basica' => 'Preparatoria',
        ]);

        $anio = anioAcademico::create([
            'anio_basica' => 'Segundo',
        ]);

        $anio = anioAcademico::create([
            'anio_basica' => 'Tercero',
        ]);

        $anio = anioAcademico::create([
            'anio_basica' => 'Cuarto',
        ]);

        $anio = anioAcademico::create([
            'anio_basica' => 'Quinto',
        ]);

        $anio = anioAcademico::create([
            'anio_basica' => 'Sexto',
        ]);

        $anio = anioAcademico::create([
            'anio_basica' => 'Séptimo',
        ]);

        $anio = anioAcademico::create([
            'anio_basica' => 'Octavo',
        ]);

        $anio = anioAcademico::create([
            'anio_basica' => 'Noveno',
        ]);

        $anio = anioAcademico::create([
            'anio_basica' => 'Décimo',
        ]);

        $anio = anioAcademico::create([
            'anio_basica' => 'Primero de Bachillerato',
        ]);

        $anio = anioAcademico::create([
            'anio_basica' => 'Segundo de Bachillerato',
        ]);

        $anio = anioAcademico::create([
            'anio_basica' => 'Tercero de Bachillerato',
        ]);
    }
}
