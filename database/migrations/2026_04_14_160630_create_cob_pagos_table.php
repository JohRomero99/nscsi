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
        Schema::create('cob_pagos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cob_detalle_id')->nullable();
            $table->decimal('monto', 8, 2);
            $table->date('fecha_pago');
            $table->timestamps();

            $table->foreign('cob_detalle_id')->references('id')->on('cob_detalle')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cob_pagos');
    }
};
