<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear Usuario
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('Soporte.tecnico.1'),
        ]);

        // Crear persona asociada
        $user->persona()->create([
            'cedula' => '0000000000',
            'primer_nombre' => 'admin',
            'segundo_nombre' => 'admin',
            'apellido_paterno' => 'admin',
            'apellido_materno' => 'admin',
        ]);

        // Asignar rol
        $user->assignRole('admin');

        // Crear Usuario
        $colector = User::create([
            'name' => 'colector',
            'email' => 'colector@nsc.edu.ec',
            'password' => bcrypt('Soporte.tecnico.1'),
        ]);

        // Crear persona asociada
        $colector->persona()->create([
            'cedula' => '0955546605',
            'primer_nombre' => 'colector',
            'segundo_nombre' => 'colector',
            'apellido_paterno' => 'colector',
            'apellido_materno' => 'colector',
        ]);

        // Asignar rol
        $colector->assignRole('colector');
    }
}
