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
        Schema::create('seguro', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_seguro')->nullable();
            $table->string('aseguradora')->nullable();
            $table->string('telefono_emergencia')->nullable();
            $table->string('derivar_a')->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seguro');
    }
};
