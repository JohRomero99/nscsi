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
            'motivo_concepto' => 'Beca',
            'estado' => '',
        ]);

        $motivo = motivo::create([
            'motivo_concepto' => 'Media beca',
            'estado' => '',
        ]);

        $motivo = motivo::create([
            'motivo_concepto' => 'Descuento',
            'estado' => '',
        ]);

        $motivo = motivo::create([
            'motivo_concepto' => 'Otro',
            'estado' => '',
        ]);
    }
}
