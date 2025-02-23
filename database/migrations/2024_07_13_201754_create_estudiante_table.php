<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id');
            $table->string('numero_matricula')->nullable();
            $table->unsignedBigInteger('anio_academico_id')->nullable();
            $table->string('curso')->nullable();
            $table->string('usr_moodle_id')->nullable();
            $table->string('repite_ano')->nullable();
            //Revisar si se puede hacer una tabla aparte para estos datos
            $table->string('tipo_vivienda')->nullable();
            $table->string('anos_domicilio')->nullable();
            $table->string('vive_con')->nullable();
            //Revisar si se puede hacer una tabla aparte para estos datos
            $table->string('estado')->nullable();
            $table->timestamps();

            $table->foreign('persona_id')->references('id')->on('persona')->onDelete('cascade');
            $table->foreign('anio_academico_id')->references('id')->on('anio_academico')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiante');
    }
};
