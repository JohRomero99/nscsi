<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\motivo;

class motivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $motivo = motivo::create([
            'motivo_concepto' => '--seleccionar--',
            'estado' => '',
        ]);

        $motivo = motivo::create([
            'motivo_concepto' => 'beca',
            'estado' => '',
        ]);

        $motivo = motivo::create([
            'motivo_concepto' => 'media beca',
            'estado' => '',
        ]);

        $motivo = motivo::create([
            'motivo_concepto' => 'descuento',
            'estado' => '',
        ]);
    }
}
