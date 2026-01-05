<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\frecuenciaMedicamento;

class frecuenciaMedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $frecuenciaMedicamento = frecuenciaMedicamento::create([
            'frecuencia_medicamentos' => '1 vez al día',
        ]);

        $frecuenciaMedicamento = frecuenciaMedicamento::create([
            'frecuencia_medicamentos' => '2 veces al día',
        ]);

        $frecuenciaMedicamento = frecuenciaMedicamento::create([
            'frecuencia_medicamentos' => '3 veces al día',
        ]);

        $frecuenciaMedicamento = frecuenciaMedicamento::create([
            'frecuencia_medicamentos' => 'Cada 8 horas',
        ]);

        $frecuenciaMedicamento = frecuenciaMedicamento::create([
            'frecuencia_medicamentos' => 'Cada 12 horas',
        ]);
    }
}
