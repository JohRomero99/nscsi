<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoLibreta;

class TipoLibretaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoLibreta::create([
            'tipo_libreta' => 'P1',
            'detalle' => 'Parcial 1 Quimestre 1'
        ]);
        TipoLibreta::create([
            'tipo_libreta' => 'P2',
            'detalle' => 'Parcial 2 Quimestre 1'
        ]);
        TipoLibreta::create([
            'tipo_libreta' => '1Q',
            'detalle' => 'Quimestre 1'
        ]);
        TipoLibreta::create([
            'tipo_libreta' => 'P3',
            'detalle' => 'Parcial 1 Quimestre 2'
        ]);
        TipoLibreta::create([
            'tipo_libreta' => 'P4',
            'detalle' => 'Parcial 2 Quimestre 2'
        ]);  
        TipoLibreta::create([
            'tipo_libreta' => '2Q',
            'detalle' => 'Quimestre 2'
        ]);
    }
}
