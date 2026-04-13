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
        Schema::create('cob_valor_ambiente_digital', function (Blueprint $table) {
            $table->id();
            $table->string('valor_ambiente_digital')->nullable();
            $table->unsignedBigInteger('periodo_lectivo_id')->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();

            $table->foreign('periodo_lectivo_id')->references('id')->on('periodo_lectivo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cob_valor_ambiente_digital');
    }
};
