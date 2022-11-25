<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\cob_valores_max_diferir;


class ValorMaximoDifeririSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cob_valores_max_diferir::create([
            'diferir_a_partir' => 300,
            'num_cuota' => 2
        ]);

        cob_valores_max_diferir::create([
            'diferir_a_partir' => 600,
            'num_cuota' => 3
        ]);

        cob_valores_max_diferir::create([
            'diferir_a_partir' => 1000,
            'num_cuota' => 4
        ]);

        cob_valores_max_diferir::create([
            'diferir_a_partir' => 1500,
            'num_cuota' => 5
        ]);
    }
}
