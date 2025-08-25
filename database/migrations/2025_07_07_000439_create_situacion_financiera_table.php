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
        Schema::create('situacion_financiera', function (Blueprint $table) {
            $table->id();
            // $table->string('regimen_laboral_id')->nullable();
            // $table->string('nombre_empresa')->nullable();
            // $table->string('direccion_trabajo')->nullable();
            // $table->string('telefono_trabajo')->nullable();
            $table->json('ingreso_egresos')->nullable();
            // $table->json('referencia_familiar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('situacion_financiera');
    }
};
