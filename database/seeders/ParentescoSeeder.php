<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parentesco;

class ParentescoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parentesco::create([
            'detalle' => 'Padre'
        ]);
        Parentesco::create([
            'detalle' => 'Madre'
        ]);
        Parentesco::create([
            'detalle' => 'Otro'
        ]);
    }
}
