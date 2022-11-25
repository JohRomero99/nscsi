<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCobEstadoCuentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cob_estado_cuenta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('concepto_cobro_id')->nullable();
            $table->unsignedBigInteger('valor_actualizado')->nullable();
            $table->string('estudiante_id')->nullable();
            $table->decimal('valor_normal', 8, 2)->nullable();
            $table->decimal('valor_descontado', 8, 2)->nullable();
            $table->decimal('valor_a_tomar', 8, 2)->nullable();
            $table->decimal('valor_cobrado', 8, 2)->nullable();
            $table->decimal('saldo', 8, 2)->nullable();
            $table->string('mes_a_pagar')->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();  

            $table->foreign('concepto_cobro_id')
                ->references('id')
                ->on('cob_concepto_cobro')
                ->onDelete('set null');

            $table->foreign('valor_actualizado')
                ->references('id')
                ->on('cob_valor_actualizado')
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
        Schema::dropIfExists('cob_estado_cuenta');
    }
}
