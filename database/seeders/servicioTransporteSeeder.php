<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\servicioTransporte;

class servicioTransporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servicioTransporte = servicioTransporte::create([
            'metodo_transporte' => '--seleccionar--',
        ]);

        $servicioTransporte = servicioTransporte::create([
            'metodo_transporte' => 'Retiro personalmente (o persona autorizada)',
        ]);

        $servicioTransporte = servicioTransporte::create([
            'metodo_transporte' => 'Expreso por mi cuenta',
        ]);

        $servicioTransporte = servicioTransporte::create([
            'metodo_transporte' => 'Requiero expreso',
        ]);
    }
}
