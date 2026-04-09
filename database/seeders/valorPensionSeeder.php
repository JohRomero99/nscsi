<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\valorPension;

class valorPensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $valorPension = valorPension::create([
            'concepto' => 'Inicial a Décimo',
            'pension_base' => '160.00',
            'descuento' => '18.76',
            'pension_descuento' => '129.99',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);

        $valorPension = valorPension::create([
            'concepto' => 'Bachillerato',
            'pension_base' => '160.00',
            'descuento' => '12.51',
            'pension_descuento' => '139.99',
            'periodo_lectivo_id' => '1',
            'estado' => '',
        ]);
    }
}
