<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\pensiones;

class pensionesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pensiones = pensiones::create([
            'descripcion' => 'Pensión Básica 160 - Abril 2026',
            'pension' => '$160.00',
            'descuento' => '18.76%',
            'total_a_pagar' => '$129.00',
            //'fecha_de_pago' => '',
            'Estado' => 'Pendiente',
        ]);

        $pensiones = pensiones::create([
            'descripcion' => 'Pensión Básica 160 - Mayo 2026',
            'pension' => '$160.00',
            'descuento' => '18.76%',
            'total_a_pagar' => '$129.00',
            //'fecha_de_pago' => '',
            'Estado' => 'Pendiente',
        ]);

        $pensiones = pensiones::create([
            'descripcion' => 'Pensión Básica 160 - Junio 2026',
            'pension' => '$160.00',
            'descuento' => '18.76%',
            'total_a_pagar' => '$129.00',
            //'fecha_de_pago' => '',
            'Estado' => 'Pendiente',
        ]);

        $pensiones = pensiones::create([
            'descripcion' => 'Pensión Básica 160 - Julio 2026',
            'pension' => '$160.00',
            'descuento' => '18.76%',
            'total_a_pagar' => '$129.00',
            //'fecha_de_pago' => '',
            'Estado' => 'Pendiente',
        ]);

        $pensiones = pensiones::create([
            'descripcion' => 'Pensión Básica 160 - Agosto 2026',
            'pension' => '$160.00',
            'descuento' => '18.76%',
            'total_a_pagar' => '$129.00',
            //'fecha_de_pago' => '',
            'Estado' => 'Pendiente',
        ]);

        $pensiones = pensiones::create([
            'descripcion' => 'Pensión Básica 160 - Septiembre 2026',
            'pension' => '$160.00',
            'descuento' => '18.76%',
            'total_a_pagar' => '$129.00',
            //'fecha_de_pago' => '',
            'Estado' => 'Pendiente',
        ]);

        $pensiones = pensiones::create([
            'descripcion' => 'Pensión Básica 160 - Octubre 2026',
            'pension' => '$160.00',
            'descuento' => '18.76%',
            'total_a_pagar' => '$129.00',
            //'fecha_de_pago' => '',
            'Estado' => 'Pendiente',
        ]);

        $pensiones = pensiones::create([
            'descripcion' => 'Pensión Básica 160 - Noviembre 2026',
            'pension' => '$160.00',
            'descuento' => '18.76%',
            'total_a_pagar' => '$129.00',
            //'fecha_de_pago' => '',
            'Estado' => 'Pendiente',
        ]);

        $pensiones = pensiones::create([
            'descripcion' => 'Pensión Básica 160 - Diciembre 2026',
            'pension' => '$160.00',
            'descuento' => '18.76%',
            'total_a_pagar' => '$129.00',
            //'fecha_de_pago' => '',
            'Estado' => 'Pendiente',
        ]);

        $pensiones = pensiones::create([
            'descripcion' => 'Pensión Básica 160 - Enero 2026',
            'pension' => '$160.00',
            'descuento' => '18.76%',
            'total_a_pagar' => '$129.00',
            //'fecha_de_pago' => '',
            'Estado' => 'Pendiente',
        ]);

    }
}
