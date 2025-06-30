<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\viveCon;

class viveConSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $viveCon = viveCon::create([
            'vive_con_familiar' => '--seleccionar--',
        ]);

        $viveCon = viveCon::create([
            'vive_con_familiar' => 'Con ambos Padres',
        ]);

        $viveCon = viveCon::create([
            'vive_con_familiar' => 'Madre',
        ]);

        $viveCon = viveCon::create([
            'vive_con_familiar' => 'Padre',
        ]);

        $viveCon = viveCon::create([
            'vive_con_familiar' => 'Abuelo',
        ]);

        $viveCon = viveCon::create([
            'vive_con_familiar' => 'Abuela',
        ]);

        $viveCon = viveCon::create([
            'vive_con_familiar' => 'Hermano',
        ]);

        $viveCon = viveCon::create([
            'vive_con_familiar' => 'Hermana',
        ]);

        $viveCon = viveCon::create([
            'vive_con_familiar' => 'Tío',
        ]);

        $viveCon = viveCon::create([
            'vive_con_familiar' => 'Tía',
        ]);
    }
}
