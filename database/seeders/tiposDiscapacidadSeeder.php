<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tipos_discapacidad;

class tiposDiscapacidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $tiposDiscapacidad = tipos_discapacidad::create([
            'tipos_discapacidad' => 'Discapacidad física',
        ]);

        $tiposDiscapacidad = tipos_discapacidad::create([
            'tipos_discapacidad' => 'Discapacidad auditiva',
        ]);

        $tiposDiscapacidad = tipos_discapacidad::create([
            'tipos_discapacidad' => 'Discapacidad visual',
        ]);

        $tiposDiscapacidad = tipos_discapacidad::create([
            'tipos_discapacidad' => 'Discapacidad de lenguaje / del habla',
        ]);

        $tiposDiscapacidad = tipos_discapacidad::create([
            'tipos_discapacidad' => 'Discapacidad intelectual',
        ]);

        $tiposDiscapacidad = tipos_discapacidad::create([
            'tipos_discapacidad' => 'Discapacidad múltiple (cuando la persona presenta dos o más de los tipos anteriores)',
        ]);
    }
}
