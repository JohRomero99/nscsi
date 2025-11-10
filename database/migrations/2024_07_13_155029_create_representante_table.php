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
        Schema::create('representante', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id')->nullable();
            $table->unsignedBigInteger('informacion_laboral_id')->nullable();
            $table->unsignedBigInteger('parentesco')->nullable();
            $table->timestamps();

            $table->foreign('persona_id')->references('id')->on('persona')->onDelete('cascade');
            $table->foreign('informacion_laboral_id')->references('id')->on('informacion_laboral')->onDelete('cascade');
            $table->foreign('parentesco')->references('id')->on('relacion_familiar')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('representante');
    }
};
