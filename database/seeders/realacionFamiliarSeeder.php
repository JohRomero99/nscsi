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
            'relacion_familiar' => 'Padre',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Madre',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Abuelo paterno',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Abuela paterna',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Abuelo materno',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Abuela materna',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Bisabuelo paterno',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Bisabuela paterna',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Bisabuelo materno',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Bisabuela materna',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Hermano',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Hermana',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Tío paterno',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Tía paterna',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Tío materno',
        ]);

        $relacionFamiliar = relacionFamiliar::create([
            'relacion_familiar' => 'Tía materna',
        ]);
        
    }
}
