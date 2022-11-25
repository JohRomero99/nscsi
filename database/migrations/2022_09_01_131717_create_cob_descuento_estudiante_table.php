<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCobDescuentoEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cob_descuento_estudiante', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('concepto_cobro_id')->nullable();
            $table->unsignedBigInteger('cob_descripcion_id')->nullable();
            $table->string('estudiante_ci')->nullable();
            $table->decimal('valor_descontado', 8, 2)->nullable();
            $table->string('ano_lectivo')->nullable();
            $table->timestamps();

            $table->foreign('cob_descripcion_id')
                ->references('id')
                ->on('cob_descuento_cobro')
                ->onDelete('set null');

            $table->foreign('concepto_cobro_id')
                ->references('id')
                ->on('cob_concepto_cobro')
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
        Schema::dropIfExists('cob_descuento_estudiante');
    }
}
