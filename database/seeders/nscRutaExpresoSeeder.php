<?php

namespace Database\Seeders;

use App\Models\nscRutaExpreso;
use Illuminate\Database\Seeder;

class nscRutaExpresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        nscRutaExpreso::create([
            'rutas' => '--selecciona',
        ]);

        nscRutaExpreso::create([
            'rutas' => 'Alborada',
        ]);

        nscRutaExpreso::create([
            'rutas' => 'Garzota',
        ]);

        nscRutaExpreso::create([
            'rutas' => 'Guayacanes',
        ]);

        nscRutaExpreso::create([
            'rutas' => ' Guayacanes-Samanes',
        ]);

        nscRutaExpreso::create([
            'rutas' => 'La Joya',
        ]);

        nscRutaExpreso::create([
            'rutas' => 'Matices Villa club',
        ]);

        nscRutaExpreso::create([
            'rutas' => 'Matices Veranda',
        ]);

        nscRutaExpreso::create([
            'rutas' => 'Mucho lote 1 - Ciudad Domingo',
        ]);

        nscRutaExpreso::create([
            'rutas' => 'Mucho lote 2',
        ]);

        nscRutaExpreso::create([
            'rutas' => 'Orquideas Vergeles',
        ]);

        nscRutaExpreso::create([
            'rutas' => 'Rosales - Alamos - Condor',
        ]);

        nscRutaExpreso::create([
            'rutas' => 'Sauces',
        ]);

        nscRutaExpreso::create([
            'rutas' => 'Vía Salitre',
        ]);

        nscRutaExpreso::create([
            'rutas' => 'Villa Italia - La Rioja',
        ]);
    }
}
