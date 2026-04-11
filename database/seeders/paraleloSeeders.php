<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\paralelo;

class paraleloSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paralelo = paralelo::create([
            'paralelo' => '--seleccionar--',
        ]);

        $paralelo = paralelo::create([
            'paralelo' => 'A',
        ]);

        $paralelo = paralelo::create([
            'paralelo' => 'B',
        ]);

        $paralelo = paralelo::create([
            'paralelo' => 'C',
        ]);

        $paralelo = paralelo::create([
            'paralelo' => 'D',
        ]);

        $paralelo = paralelo::create([
            'paralelo' => 'E',
        ]);

        $paralelo = paralelo::create([
            'paralelo' => 'F',
        ]);
    }
}
