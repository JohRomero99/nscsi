<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCobEstadoValoresEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cob_estado_valores_estudiante', function (Blueprint $table) {
            $table->id();
            $table->string('concepto_cobro_id');
            $table->string('estudiante_ci');
            $table->decimal('valor_descontado_estudiante', 8, 2);
            $table->string('ano_lectivo');
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
        Schema::dropIfExists('cob_estado_valores_estudiante');
    }
}
