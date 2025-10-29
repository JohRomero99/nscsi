<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ruta;

class rutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ruta = ruta::create([
            'rutas_escolares' => '--seleccionar--',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'Alborada',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'Garzota',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'Guayacanes',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'Guayacanes-samanes',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'La joya',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'Matices villa club',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'Matices-veranda',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'Metropolis 2',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'Mucho lote 1 - ciudad santiago',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'Mucho lote 2',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'Orquideas vergeles',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'Rosales - alamos - condor',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'Samanes 7- j. montalvo',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'Sauces',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'Sur oeste - m de roldos',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'Sur - atarazana',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'Via salitre',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'Villa del rey',
        ]);

        $ruta = ruta::create([
            'rutas_escolares' => 'Villa italia - la rioja',
        ]);

    }
}
