<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCobPersonalizarValorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cob_personalizar_valor', function (Blueprint $table) {
            $table->id();
            $table->string("user_id");
            $table->string("descripcion");
            $table->string("fecha_vencimiento");
            $table->string("valor_adeudado");
            $table->string("saldo");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cob_personalizar_valor');
    }
}
