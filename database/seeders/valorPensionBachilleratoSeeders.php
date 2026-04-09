<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\valorPensionBachillerato;

class valorPensionBachilleratoSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $valorPensionBachillerato = valorPensionBachillerato::create([
            'pension_base' => '160.00',
            'descuento' => '12.51',
            'pension_descuento' => '',
        ]);
    }
}
