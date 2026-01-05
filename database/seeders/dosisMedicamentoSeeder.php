<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\dosisMedicamento;

class dosisMedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $dosisMedicamento = dosisMedicamento::create([
            'dosis_medicamentos' => '¼ pastilla',
        ]);

        $dosisMedicamento = dosisMedicamento::create([
            'dosis_medicamentos' => '½ pastilla',
        ]);

        $dosisMedicamento = dosisMedicamento::create([
            'dosis_medicamentos' => '1 pastilla',
        ]);

        $dosisMedicamento = dosisMedicamento::create([
            'dosis_medicamentos' => '2 pastillas',
        ]);

        $dosisMedicamento = dosisMedicamento::create([
            'dosis_medicamentos' => '5 ml',
        ]);

        $dosisMedicamento = dosisMedicamento::create([
            'dosis_medicamentos' => '10 ml',
        ]);

        $dosisMedicamento = dosisMedicamento::create([
            'dosis_medicamentos' => '15 ml',
        ]);
    }
}
