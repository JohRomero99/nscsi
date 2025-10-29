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
        Schema::create('transporte_escolar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('servicio_transporte_id')->nullable();
            $table->unsignedBigInteger('ruta_id')->nullable();
            $table->string('estado')->nullable();

            $table->foreign('servicio_transporte_id')->references('id')->on('servicio_transporte')->onDelete('cascade');
            $table->foreign('ruta_id')->references('id')->on('ruta')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transporte_escolar');
    }
};
