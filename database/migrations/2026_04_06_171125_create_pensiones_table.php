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
        Schema::create('pensiones', function (Blueprint $table) {
            $table->id();
            //$table->string('estudiante_id')->nullable();
            //$table->string('valor_matriculacion')->nullable();
            //$table->string('valor_seguro')->nullable();
            //$table->string('valor_ambiente_digital')->nullable();
            //
            //$table->string('pension_base')->nullable();
            $table->string('descuento_basica')->nullable();
            $table->string('descuento_bachillerato')->nullable();
            $table->string('periodo_lectivo_id')->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pensiones');
    }
};
