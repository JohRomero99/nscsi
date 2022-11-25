<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\nsc_pasos_perfil;

class pasosPerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        nsc_pasos_perfil::create([
            'pasos' => 'Actualizar Perfil',
        ]);

        nsc_pasos_perfil::create([
            'pasos' => 'Actualizar Completado',
        ]);
    }
}
