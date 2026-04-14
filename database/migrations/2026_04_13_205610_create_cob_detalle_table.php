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
        Schema::create('cob_detalle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cob_concepto_id')->nullable();
            $table->unsignedBigInteger('cob_estudiante_id')->nullable();
            $table->unsignedBigInteger('cob_valor_pension_id')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->string('total_pagado')->nullable();
            $table->unsignedBigInteger('periodo_lectivo_id')->nullable();
            $table->timestamps();

            $table->foreign('cob_concepto_id')->references('id')->on('cob_concepto')->onDelete('cascade');
            $table->foreign('cob_estudiante_id')->references('id')->on('cob_estudiante')->onDelete('cascade');
            $table->foreign('cob_valor_pension_id')->references('id')->on('cob_valor_pension')->onDelete('cascade');
            $table->foreign('periodo_lectivo_id')->references('id')->on('periodo_lectivo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cob_detalle');
    }
};
