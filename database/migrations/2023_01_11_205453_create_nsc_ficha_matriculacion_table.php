<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNscFichaMatriculacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsc_ficha_matriculacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_representante')->nullable();
            $table->string('codigo_domicilio_estudiante')->nullable();
            $table->string('transporte_escolar')->nullable();
            $table->string('forma_pago_pensiones')->nullable();
            $table->string('facturacion')->nullable();
            $table->string('persona_facturacion')->nullable();
            $table->timestamps();

            $table->foreign('estudiante_representante')
                ->references('id')
                ->on('nsc_estudiante_representante')
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
        Schema::dropIfExists('ficha_matriculacion');
    }
}
