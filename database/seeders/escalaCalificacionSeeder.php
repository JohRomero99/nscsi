<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\escalaCalificacion;

class escalaCalificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $escalaCalificacion = escalaCalificacion::create([
            'calificacion' => 'Raras veces',
        ]);

        $escalaCalificacion = escalaCalificacion::create([
            'calificacion' => 'A veces',
        ]);

        $escalaCalificacion = escalaCalificacion::create([
            'calificacion' => 'Frecuente',
        ]);

        $escalaCalificacion = escalaCalificacion::create([
            'calificacion' => 'Siempre',
        ]);
    }
}
