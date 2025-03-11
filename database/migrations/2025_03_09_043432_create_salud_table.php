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
        Schema::create('salud', function (Blueprint $table) {
            $table->id();
            $table->string('cedula_estudiante')->nullable();
            $table->string('primer_nombre_estudiante')->nullable();
            $table->string('segundo_nombre_estudiante')->nullable();
            $table->string('apellido_paterno_estudiante')->nullable();
            $table->string('apellido_materno_estudiante')->nullable();
            $table->string('ano_basica')->nullable();
            $table->string('estatura')->nullable();
            $table->string('peso_libras')->nullable();

            $table->string('discapacidad_si_no')->nullable();
            $table->string('discapacidad_lenguaje_si_no')->nullable();
            $table->string('discapacidad_lenguaje_porcentaje')->nullable();
            $table->string('discapacidad_lenguaje_detalle')->nullable();
            $table->string('discapacidad_auditiva_si_no')->nullable();
            $table->string('discapacidad_auditiva_porcentaje')->nullable();
            $table->string('discapacidad_auditiva_detalle')->nullable();
            $table->string('discapacidad_visual_si_no')->nullable();
            $table->string('discapacidad_visual_porcentaje')->nullable();
            $table->string('discapacidad_visual_detalle')->nullable();
            $table->string('discapacidad_fisica_si_no')->nullable();
            $table->string('discapacidad_fisica_porcentaje')->nullable();
            $table->string('discapacidad_fisica_detalle')->nullable();
            $table->string('discapacidad_intelectual_si_no')->nullable();
            $table->string('discapacidad_intelectual_porcentaje')->nullable();
            $table->string('discapacidad_intelectual_detalle')->nullable();

            $table->string('cronicas_catastroficas_si_no')->nullable();
            $table->string('cronicas_catastroficas_porcentaje')->nullable();
            $table->string('cronicas_catastroficas_detalle')->nullable();
            $table->string('psicosocial_si_no')->nullable();
            $table->string('psicosocial_porcentaje')->nullable();
            $table->string('psicosocial_detalle')->nullable();

            $table->string('aparatos_ayuda')->nullable();
            $table->string('especifique_aparatos_ayuda')->nullable();
            $table->string('carnet_conadis_si_no')->nullable();
            $table->string('numero_carnet_conadis')->nullable();
            $table->string('medicamento_si_no')->nullable();
            $table->string('especifique_medicamentos')->nullable();
            $table->string('alergia_estudiante_si_no')->nullable();
            $table->string('alergia_estudiante')->nullable();
            $table->string('enfermedades_accidentes')->nullable();
            $table->string('especifique_accidente_enfermedad')->nullable();
            $table->string('intervencion_quirurgica_si_no')->nullable();
            $table->string('cantidad_intervencion_quirugicas')->nullable();
            $table->string('tipo_intervencion_quirugica')->nullable();
            $table->string('fecha_ultima_desparasitacion')->nullable();
            $table->string('vacunas')->nullable();
            $table->string('otra_vacuna')->nullable();
            $table->string('dificultad_dormir')->nullable();
            $table->string('otra_dificultad_dormir')->nullable();
            $table->string('antecedentes_patologicos_famiiares')->nullable();
            $table->string('especifique_antecedentes_patologicos_famiiares')->nullable();
            $table->string('seguro_estudiante_si_no')->nullable();
            $table->string('aseguradora_salud')->nullable();
            $table->string('aseguradora_salud_telefono')->nullable();
            $table->string('aseguradora_salud_emergencia')->nullable();
            $table->string('aseguradora_accidente')->nullable();
            $table->string('aseguradora_accidente_telefono')->nullable();
            $table->string('aseguradora_accidente_emergencia')->nullable();
            $table->string('aseguradora_otra')->nullable();
            $table->string('aseguradora_otro_telefono')->nullable();
            $table->string('aseguradora_otro_emergencia')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salud');
    }
};
