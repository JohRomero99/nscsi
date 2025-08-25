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
        Schema::create('informacion_laboral', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ocupacion_id')->nullable();
            $table->string('trabaja_para')->nullable();
            $table->string('nombre_empresa')->nullable();
            $table->string('direccion_trabajo')->nullable();
            $table->string('situacion_financiera')->nullable();
            $table->string('telefono_trabajo')->nullable();
            $table->json('ingreso_egresos')->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();

            $table->foreign('ocupacion_id')->references('id')->on('ocupacion')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informacion_laboral');
    }
};
