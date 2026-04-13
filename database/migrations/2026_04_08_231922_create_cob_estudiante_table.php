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
        Schema::create('cob_estudiante', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id')->nullable();
            $table->unsignedBigInteger('anio_academico_id')->nullable();
            $table->unsignedBigInteger('paralelo_id')->nullable();
            $table->unsignedBigInteger('cob_motivo_id')->nullable();
            $table->unsignedBigInteger('cob_valor_matriculacion_id')->nullable();
            $table->unsignedBigInteger('cob_valor_pension_id')->nullable();
            $table->unsignedBigInteger('cob_valor_seguro_id')->nullable();
            $table->unsignedBigInteger('cob_valor_ambiente_digital_id')->nullable();
            $table->unsignedBigInteger('periodo_lectivo_id')->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();

            $table->foreign('estudiante_id')->references('id')->on('estudiante')->onDelete('cascade');
            $table->foreign('anio_academico_id')->references('id')->on('anio_academico')->onDelete('cascade');
            $table->foreign('paralelo_id')->references('id')->on('paralelo')->onDelete('cascade');
            $table->foreign('cob_motivo_id')->references('id')->on('cob_motivo')->onDelete('cascade');
            $table->foreign('cob_valor_matriculacion_id')->references('id')->on('cob_valor_matriculacion')->onDelete('cascade');
            $table->foreign('cob_valor_pension_id')->references('id')->on('cob_valor_pension')->onDelete('cascade');
            $table->foreign('cob_valor_seguro_id')->references('id')->on('cob_valor_seguro')->onDelete('cascade');
            $table->foreign('cob_valor_ambiente_digital_id')->references('id')->on('cob_valor_ambiente_digital')->onDelete('cascade');
            $table->foreign('periodo_lectivo_id')->references('id')->on('periodo_lectivo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cob_estudiante');
    }
};
