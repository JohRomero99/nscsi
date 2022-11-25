<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNscCobrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsc_cobros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('concepto_cobro_id')->nullable();
            $table->unsignedBigInteger('estado_cuenta_id')->nullable();
            $table->unsignedBigInteger('voucher_id')->nullable();
            $table->unsignedBigInteger('representante_id')->nullable();
            $table->string('usuarioLogin')->nullable();
            $table->dateTime('fecha_cobro')->nullable();
            $table->string('estudiante_id')->nullable();
            $table->decimal('valor',10,2)->nullable();
            $table->string('n_factura')->nullable();
            $table->string('concepto')->nullable();
            $table->string('estado')->nullable();
            $table->timestamps($precision = 0);

            $table->foreign('concepto_cobro_id')
                ->references('id')
                ->on('cob_concepto_cobro')
                ->onDelete('set null');

            $table->foreign('representante_id')
                ->references('id')
                ->on('nsc_representante')
                ->onDelete('set null');

            $table->foreign('estado_cuenta_id')
                ->references('id')
                ->on('cob_estado_cuenta')
                ->onDelete('set null');

            $table->foreign('voucher_id')
                ->references('id')
                ->on('cob_voucher')
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
        Schema::dropIfExists('nsc_cobros');
    }
}
