<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\valorSeguro;

class valorSeguroSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $valorSeguro = valorSeguro::create([
            'valor_seguro' => '--seleccionar--',
            'estado' => '',
        ]);

        $valorSeguro = valorSeguro::create([
            'valor_seguro' => '25',
            'estado' => '',
        ]);

    }
}
