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
        Schema::create('dificultad_dormir', function (Blueprint $table) {
            $table->id();
            $table->string('problemas_dormir')->nullable();
            $table->string('duracion')->nullable();
            $table->string('frecuencia')->nullable();
            $table->string('causas_potencial')->nullable();
            $table->string('tratamiento')->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dificultad_dormir');
    }
};
