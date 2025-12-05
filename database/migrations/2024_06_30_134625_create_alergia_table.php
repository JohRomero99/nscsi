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
        Schema::create('alergia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipos_alergia_id')->nullable();
            $table->string('restriccion')->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();

            $table->foreign('tipos_alergia_id')->references('id')->on('tipos_alergia')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alergia');
    }
};
