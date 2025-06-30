<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tipoVivienda;

class tipoViviendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipoVivienda = tipoVivienda::create([
            'material_construccion' => '--seleccionar--',
        ]);

        $tipoVivienda = tipoVivienda::create([
            'material_construccion' => 'Concreto / Hormigón armado',
        ]);

        $tipoVivienda = tipoVivienda::create([
            'material_construccion' => 'Ladrillo o bloque',
        ]);

        $tipoVivienda = tipoVivienda::create([
            'material_construccion' => 'Madera',
        ]);

        $tipoVivienda = tipoVivienda::create([
            'material_construccion' => 'Caña guadua / Caña picada',
        ]);

        $tipoVivienda = tipoVivienda::create([
            'material_construccion' => 'Zinc, lata o materiales de desecho',
        ]);

        $tipoVivienda = tipoVivienda::create([
            'material_construccion' => 'Palma / Paja / Techos vegetales',
        ]);
    }
}
