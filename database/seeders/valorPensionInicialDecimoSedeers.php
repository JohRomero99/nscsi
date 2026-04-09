<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\valorPensioninicialDecimo;

class valorPensionInicialDecimoSedeers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $valorPensioninicialDecimo = valorPensioninicialDecimo::create([
            'pension_base' => '160.00',
            'descuento' => '18.76',
            'pension_descuento' => '',
        ]);
    }
}
