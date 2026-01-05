<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\vacuna;

class vacunasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
        $tipoVivienda = vacuna::create([
            'tipo_vacunas' => 'BCG (Tuberculosis)',
        ]);

        $tipoVivienda = vacuna::create([
            'tipo_vacunas' => 'Hepatitis B',
        ]);

        $tipoVivienda = vacuna::create([
            'tipo_vacunas' => 'Pentavalente (Difteria, Tétanos, Tosferina, Haemophilus influenzae tipo B, Hepatitis B)',
        ]);

        $tipoVivienda = vacuna::create([
            'tipo_vacunas' => 'DTP / DT (Difteria, Tétanos y Tosferina)',
        ]);

        $tipoVivienda = vacuna::create([
            'tipo_vacunas' => 'Polio (IPV/OPV)',
        ]);

        $tipoVivienda = vacuna::create([
            'tipo_vacunas' => 'Neumococo (PCV)',
        ]);

        $tipoVivienda = vacuna::create([
            'tipo_vacunas' => 'Rotavirus',
        ]);

        $tipoVivienda = vacuna::create([
            'tipo_vacunas' => 'Triple Viral – MMR (Sarampión, Rubeola, Paperas)',
        ]);

        $tipoVivienda = vacuna::create([
            'tipo_vacunas' => 'Varicela',
        ]);

        $tipoVivienda = vacuna::create([
            'tipo_vacunas' => 'Influenza (Gripe)',
        ]);

        $tipoVivienda = vacuna::create([
            'tipo_vacunas' => 'Hepatitis A',
        ]);

        $tipoVivienda = vacuna::create([
            'tipo_vacunas' => 'Meningococo',
        ]);

        $tipoVivienda = vacuna::create([
            'tipo_vacunas' => 'COVID-19',
        ]);

        $tipoVivienda = vacuna::create([
            'tipo_vacunas' => 'Virus del Papiloma Humano – VPH (solo para niñas y adolescentes)',
        ]);

        $tipoVivienda = vacuna::create([
            'tipo_vacunas' => 'Refuerzo DT (Difteria y Tétanos)',
        ]);
        
        $tipoVivienda = vacuna::create([
            'tipo_vacunas' => 'Otra',
        ]);
    }
}
