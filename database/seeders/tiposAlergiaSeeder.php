<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tiposAlergia;

class tiposAlergiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposAlergia = tiposAlergia::create([
            'alergias' => '--seleccionar--',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Polvo / Ácaros',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Polen',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Pelo o caspa de animales',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Moho / Hongos',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Picaduras de insectos',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Látex',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Medicamentos (penicilina, antibióticos)',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Huevos',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Maní / Cacahuate',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Nueces',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Mariscos',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Pescado',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Soya',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Trigo / Gluten',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Chocolate',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Perfumes / Fragancias',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Jabones o detergentes',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Productos de limpieza',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Cloro',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Humo / Cigarrillo',
        ]);

        $tiposAlergia = tiposAlergia::create([
            'alergias' => 'Otra',
        ]);

    }
}
