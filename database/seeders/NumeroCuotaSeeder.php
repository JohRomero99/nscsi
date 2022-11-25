<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\cob_num_cuota;

class NumeroCuotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cob_num_cuota::create([
            'numero_cuotas' => '0',
        ]);

        cob_num_cuota::create([
            'numero_cuotas' => '3',
        ]);

        cob_num_cuota::create([
            'numero_cuotas' => '6',
        ]);

        cob_num_cuota::create([
            'numero_cuotas' => '9',
        ]);

        cob_num_cuota::create([
            'numero_cuotas' => '12',
        ]);
    }
}
