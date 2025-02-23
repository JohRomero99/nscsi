<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\sexo;

class sexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sexo = sexo::create([
            'sexo' => 'Hombre',
        ]);

        $sexo = sexo::create([
            'sexo' => 'Mujer',
        ]);
    }
}
