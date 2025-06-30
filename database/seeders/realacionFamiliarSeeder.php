<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\relacionFamiliar;

class realacionFamiliarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => '--seleccionar--',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Padre',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Madre',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Abuelo',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Abuela',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Tío',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Tía',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Hermano',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Hermana',
        ]);
        
    }
}
