<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\cob_concepto_cobro;

class ConceptoCobroId extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cob_concepto_cobro::create([
            'descripcion' => 'Pension Mayo',
            'valor_normal' => 106.00,
            'valor_descontado'=> 146.00,
            'fecha_vencimiento' => '2022-05-31',
            'ano_lectivo' => '2022-2023'
        ]);

        cob_concepto_cobro::create([
            'descripcion' => 'Pension Junio',
            'valor_normal' => 106.00,
            'valor_descontado'=> 146.00,
            'fecha_vencimiento' => '2022-06-30',
            'ano_lectivo' => '2022-2023'
        ]);

        cob_concepto_cobro::create([
            'descripcion' => 'Pension Julio',
            'valor_normal' => 106.00,
            'valor_descontado'=> 146.00,
            'fecha_vencimiento' => '2022-07-31',
            'ano_lectivo' => '2022-2023'
        ]);

        cob_concepto_cobro::create([
            'descripcion' => 'Pension Agosto',
            'valor_normal' => 106.00,
            'valor_descontado'=> 146.00,
            'fecha_vencimiento' => '2022-08-31',
            'ano_lectivo' => '2022-2023'
        ]);

        cob_concepto_cobro::create([
            'descripcion' => 'Pension Septiembre',
            'valor_normal' => 106.00,
            'valor_descontado'=> 146.00,
            'fecha_vencimiento' => '2022-09-30',
            'ano_lectivo' => '2022-2023'
        ]);

        cob_concepto_cobro::create([
            'descripcion' => 'Pension Octubre',
            'valor_normal' => 106.00,
            'valor_descontado'=> 146.00,
            'fecha_vencimiento' => '2022-10-31',
            'ano_lectivo' => '2022-2023'
        ]);

        cob_concepto_cobro::create([
            'descripcion' => 'Pension Noviembre',
            'valor_normal' => 106.00,
            'valor_descontado'=> 146.00,
            'fecha_vencimiento' => '2022-11-30',
            'ano_lectivo' => '2022-2023'
        ]);

        cob_concepto_cobro::create([
            'descripcion' => 'Pension Diciembre',
            'valor_normal' => 106.00,
            'valor_descontado'=> 146.00,
            'fecha_vencimiento' => '2022-12-31',
            'ano_lectivo' => '2022-2023'
        ]);

        cob_concepto_cobro::create([
            'descripcion' => 'Pension Enero',
            'valor_normal' => 106.00,
            'valor_descontado'=> 146.00,
            'fecha_vencimiento' => '2022-01-31',
            'ano_lectivo' => '2022-2023'
        ]);

        cob_concepto_cobro::create([
            'descripcion' => 'Pension Febrero',
            'valor_normal' => 106.00,
            'valor_descontado'=> 146.00,
            'fecha_vencimiento' => '2022-02-28',
            'ano_lectivo' => '2022-2023'
        ]);
    }
}
