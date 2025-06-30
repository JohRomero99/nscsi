<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\trabajaPara;

class trabajaParaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trabajaPara = trabajaPara::create([
            'trabaja_para' => '--seleccionar--',
        ]);

        $trabajaPara = trabajaPara::create([
            'trabaja_para' => 'Empresa privada',
        ]);

        $trabajaPara = trabajaPara::create([
            'trabaja_para' => 'Independiente',
        ]);

        $trabajaPara = trabajaPara::create([
            'trabaja_para' => 'Institución pública',
        ]);

        $trabajaPara = trabajaPara::create([
            'trabaja_para' => 'Otra',
        ]);
    }
    
}
