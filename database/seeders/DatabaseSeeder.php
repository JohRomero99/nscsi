<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            anioAcademicoSeeder::class,
            nacionalidadSeeder::class,
            sexoSeeder::class,
            tipoViviendaSeeder::class,
            ocupacionSeeder::class,
            trabajaParaSeeder::class,
            realacionFamiliarSeeder::class,
            convivienteEstudianteSeeder::class,
            rutaSeeder::class,
            servicioTransporteSeeder::class,
            tiposDiscapacidadSeeder::class,
            tiposAlergiaSeeder::class,
            vacunasSeeder::class,
        ]);
    }
}
