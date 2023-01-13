<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaMatriculacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_matriculacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('representante_id')->nullable();
            $table->unsignedBigInteger('estudiante_id')->nullable();
            $table->string('codigo_domicilio_estudiante')->nullable();
            $table->string('transporte_escolar')->nullable();
            $table->string('forma_pago_pensiones')->nullable();
            $table->string('facturacion')->nullable();
            $table->string('persona_facturacion');
            $table->timestamps();

            $table->foreign('representante_id')
                ->references('id')
                ->on('nsc_representante')
                ->onDelete('set null');

            $table->foreign('estudiante_id')
                ->references('id')
                ->on('nsc_estudiante')
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
