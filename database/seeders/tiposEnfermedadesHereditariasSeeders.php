<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tiposEnfermedadesHereditarias;

class tiposEnfermedadesHereditariasSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $enfermedades_hereditarias = tiposEnfermedadesHereditarias::create([
            'enfermedades_hereditarias' => '--seleccionar--',
        ]);

        $enfermedades_hereditarias = tiposEnfermedadesHereditarias::create([
            'enfermedades_hereditarias' => 'Diabetes (antecedente familiar)',
        ]);

        $enfermedades_hereditarias = tiposEnfermedadesHereditarias::create([
            'enfermedades_hereditarias' => 'Hipertensión arterial',
        ]);

        $enfermedades_hereditarias = tiposEnfermedadesHereditarias::create([
            'enfermedades_hereditarias' => 'Asma',
        ]);

        $enfermedades_hereditarias = tiposEnfermedadesHereditarias::create([
            'enfermedades_hereditarias' => 'Cáncer (familiar)',
        ]);

        $enfermedades_hereditarias = tiposEnfermedadesHereditarias::create([
            'enfermedades_hereditarias' => 'Epilepsia',
        ]);

        $enfermedades_hereditarias = tiposEnfermedadesHereditarias::create([
            'enfermedades_hereditarias' => 'Cardiopatías (problemas del corazón hereditarios)',
        ]);

        $enfermedades_hereditarias = tiposEnfermedadesHereditarias::create([
            'enfermedades_hereditarias' => 'Hemofilia',
        ]);

        $enfermedades_hereditarias = tiposEnfermedadesHereditarias::create([
            'enfermedades_hereditarias' => 'Enfermedades renales hereditarias',
        ]);

        $enfermedades_hereditarias = tiposEnfermedadesHereditarias::create([
            'enfermedades_hereditarias' => 'Hipercolesterolemia (colesterol alto hereditario)',
        ]);

        $enfermedades_hereditarias = tiposEnfermedadesHereditarias::create([
            'enfermedades_hereditarias' => 'Alergias crónicas (hereditarias)',
        ]);

        $enfermedades_hereditarias = tiposEnfermedadesHereditarias::create([
            'enfermedades_hereditarias' => 'Artritis reumatoide (factor genético)',
        ]);

        $enfermedades_hereditarias = tiposEnfermedadesHereditarias::create([
            'enfermedades_hereditarias' => 'Problemas de tiroides (hipotiroidismo/hipertiroidismo)',
        ]);

        $enfermedades_hereditarias = tiposEnfermedadesHereditarias::create([
            'enfermedades_hereditarias' => 'Migrañas crónicas (tendencia hereditaria)',
        ]);

    }
}
