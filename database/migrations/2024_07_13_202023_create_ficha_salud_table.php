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
        Schema::create('ficha_salud', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id')->nullable();
            $table->string('peso')->nullable();
            $table->string('estatura')->nullable();
            $table->unsignedBigInteger('discapacidad_id')->nullable();
            $table->unsignedBigInteger('dispositivo_ayuda_id')->nullable();
            $table->string('carnet_conadis_estado')->nullable();
            $table->string('numero_carnet_conadis')->nullable();
            $table->string('medicacion_estado')->nullable();
            $table->string('lista_medicamento')->nullable();
            $table->unsignedBigInteger('alergia_id')->nullable();
            $table->unsignedBigInteger('condicion_medica_id')->nullable();
            $table->unsignedBigInteger('intervencion_quirurgica_id')->nullable();
            $table->date('fecha_ult_desparasitacion')->nullable();
            $table->unsignedBigInteger('vacuna_id')->nullable();
            $table->unsignedBigInteger('dificultad_dormir_id')->nullable();
            $table->unsignedBigInteger('historial_patologico_id')->nullable();
            $table->unsignedBigInteger('seguro_id')->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();

            $table->foreign('estudiante_id')->references('id')->on('estudiante')->onDelete('cascade');
            $table->foreign('discapacidad_id')->references('id')->on('discapacidad')->onDelete('cascade');
            $table->foreign('dispositivo_ayuda_id')->references('id')->on('dispositivo_ayuda')->onDelete('cascade');
            $table->foreign('alergia_id')->references('id')->on('alergia')->onDelete('cascade');
            $table->foreign('condicion_medica_id')->references('id')->on('condicion_medica')->onDelete('cascade');
            $table->foreign('intervencion_quirurgica_id')->references('id')->on('intervencion_quirurgica')->onDelete('cascade');
            $table->foreign('vacuna_id')->references('id')->on('vacuna')->onDelete('cascade');
            $table->foreign('dificultad_dormir_id')->references('id')->on('dificultad_dormir')->onDelete('cascade');
            $table->foreign('historial_patologico_id')->references('id')->on('historial_patologico')->onDelete('cascade');
            $table->foreign('seguro_id')->references('id')->on('seguro')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ficha_salud');
    }
};
