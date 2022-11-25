<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\pay_url_paymentez; 

class UrlPaymentezSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pay_url_paymentez::create([
            'ambiente' => 'development',
            'url' => 'https://ccapi-stg.paymentez.com',
            'estado' => 'ACTIVO' 
            
        ]);

        pay_url_paymentez::create([
            'ambiente' => 'production',
            'url' => 'https://ccapi.paymentez.com',
            'estado' => null 
        ]);
    }
}
