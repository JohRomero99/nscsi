<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolSeeder::class);
        $this->call(nscRutaExpresoSeeder::class);
        $this->call(nscMetodoPagoPensionesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SaldoActualizadoSeeder::class);
        $this->call(ConceptoCobroId::class);
        $this->call(NumeroCuotaSeeder::class);
        $this->call(TipoCreditoSeeder::class);
        $this->call(ValorMaximoDifeririSeeder::class);
        $this->call(EstadoPasosPerfil::class);
        $this->call(UrlPaymentezSeeder::class);
        \App\Models\datosPrueba::factory(10)->create();
    }
}