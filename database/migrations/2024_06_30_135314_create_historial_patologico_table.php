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
        Schema::create('historial_patologico', function (Blueprint $table) {
            $table->id();
            $table->string('enfermedade_hereditaria')->nullable();
            $table->string('estado_actual')->nullable();
            $table->string('parentesco')->nullable();
            $table->string('comentario')->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_patologico');
    }
};
