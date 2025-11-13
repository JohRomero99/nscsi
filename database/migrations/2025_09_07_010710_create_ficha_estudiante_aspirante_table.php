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
        Schema::create('ficha_estudiante_aspirante', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id')->nullable();
            $table->string('repite_ano')->nullable();
            $table->unsignedBigInteger('anio_academico_postula_id')->nullable();
            $table->unsignedBigInteger('tipo_vivienda_id')->nullable();
            $table->string('anos_domicilio')->nullable();
            $table->string('ano_basica_postula')->nullable();
            $table->unsignedBigInteger('conviviente_estudiante_id')->nullable();
            $table->unsignedBigInteger('transporte_escolar_id')->nullable();
            $table->string('boletin_ultimo_ano')->nullable();
            $table->json('referencia_familiar')->nullable();
            $table->string('estado')->nullable();

            $table->foreign('estudiante_id')->references('id')->on('estudiante')->onDelete('cascade');
            $table->foreign('conviviente_estudiante_id')->references('id')->on('conviviente_estudiante')->onDelete('cascade');
            $table->foreign('transporte_escolar_id')->references('id')->on('transporte_escolar')->onDelete('cascade');
            $table->foreign('anio_academico_postula_id')->references('id')->on('anio_academico')->onDelete('cascade');
            $table->foreign('tipo_vivienda_id')->references('id')->on('tipo_vivvienda')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ficha_estudiante_aspirante');
    }
};
