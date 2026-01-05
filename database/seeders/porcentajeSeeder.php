<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\porcentaje;

class porcentajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 100; $i++) {

            Porcentaje::create([
                'porcentaje' => $i . '%',
            ]);

        }
    }
}
