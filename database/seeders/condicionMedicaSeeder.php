<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\condicionMedica;

class condicionMedicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $condicionMedica = condicionMedica::create([
            'condicion_medica' => '--seleccionar--',
        ]);

        $condicionMedica = condicionMedica::create([
            'condicion_medica' => 'Asma',
        ]);

        $condicionMedica = condicionMedica::create([
            'condicion_medica' => 'Diabetes',
        ]);

        $condicionMedica = condicionMedica::create([
            'condicion_medica' => 'Epilepsia',
        ]);

        $condicionMedica = condicionMedica::create([
            'condicion_medica' => 'Problemas cardíacos',
        ]);

        $condicionMedica = condicionMedica::create([
            'condicion_medica' => 'Hipertensión',
        ]);

        $condicionMedica = condicionMedica::create([
            'condicion_medica' => 'Problemas respiratorios',
        ]);

        $condicionMedica = condicionMedica::create([
            'condicion_medica' => 'Trastornos neurológicos',
        ]);

        $condicionMedica = condicionMedica::create([
            'condicion_medica' => 'Trastornos de atención (TDA / TDAH)',
        ]);

        $condicionMedica = condicionMedica::create([
            'condicion_medica' => 'Otra',
        ]);
    }
}
