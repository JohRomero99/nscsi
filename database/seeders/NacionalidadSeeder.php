<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nacionalidad;

class NacionalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nacionalidad::create([
            'nacionalidad' => 'Argentino ',
            'pais' => 'Argentina'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Beliceño/a',
            'pais' => 'Belice'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Boliviano',
            'pais' => 'Bolivia'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Brasilero / brasileño',
            'pais' => 'Brasil'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Canadiense',
            'pais' => 'Canadá'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Colombiano',
            'pais' => 'Colombia'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Costarricense',
            'pais' => 'Costa Rica'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Cubano',
            'pais' => 'Cuba'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Chileno',
            'pais' => 'Chile'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Dominicano',
            'pais' => 'República Dominicana'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Ecuatoriano',
            'pais' => 'Ecuador'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Groenlandés',
            'pais' => 'Groenlandia'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Guatemalteco',
            'pais' => 'Guatemala'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Haitiano',
            'pais' => 'Haití'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Hondureño',
            'pais' => 'Honduras'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Jamaicano / jamaiquino',
            'pais' => 'Jamaica'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Mexicano',
            'pais' => 'México'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Nicaragüense',
            'pais' => 'Nicaragua'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Panameño',
            'pais' => 'Panamá'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Paraguayo',
            'pais' => 'Paraguay'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Peruano',
            'pais' => 'Perú'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Salvadoreño',
            'pais' => 'El Salvador'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Surinamés',
            'pais' => 'Surinam'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Estadounidense',
            'pais' => 'Estados Unidos'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Uruguayo',
            'pais' => 'Uruguay'
        ]);
        Nacionalidad::create([
            'nacionalidad' => 'Venezolano',
            'pais' => 'Venezuela'
        ]);

    }
}
