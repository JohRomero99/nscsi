<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayTarjetasAgregadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_tarjetas_agregadas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('representante_id')->nullable();
            $table->string('bin');
            $table->string('status');
            $table->string('token');
            $table->string('holder_name');
            $table->string('expiry_year');
            $table->string('expiry_month');
            $table->string('transaction_reference');
            $table->string('type');
            $table->string('number');
            $table->timestamps();

            $table->foreign('representante_id')
                ->references('id')
                ->on('nsc_representante')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pay_tarjetas_agregadas');
    }
}
