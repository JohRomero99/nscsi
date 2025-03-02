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
        Schema::create('matriculacion', function (Blueprint $table) {
            $table->id();
            $table->string('cedula_estudiante')->nullable();
            $table->string('primer_nombre_estudiante')->nullable();
            $table->string('segundo_nombre_estudiante')->nullable();
            $table->string('apellido_paterno_estudiante')->nullable();
            $table->string('apellido_materno_estudiante')->nullable();
            $table->string('fecha_nacimiento_estudiante')->nullable();
            $table->string('codigo_unico_electrico')->nullable();
            $table->string('transporte_escolar')->nullable();
            $table->string('ruta_escolar')->nullable();
            // 
            $table->string('cedula_madre')->nullable();
            $table->string('primer_nombre_madre')->nullable();
            $table->string('segundo_nombre_madre')->nullable();
            $table->string('apellido_paterno_madre')->nullable();
            $table->string('apellido_materno_madre')->nullable();
            $table->string('direccion_madre')->nullable();
            $table->string('correo_madre')->nullable();
            $table->string('telefono_madre')->nullable();
            // 
            $table->string('cedula_padre')->nullable();
            $table->string('primer_nombre_padre')->nullable();
            $table->string('segundo_nombre_padre')->nullable();
            $table->string('apellido_paterno_padre')->nullable();
            $table->string('apellido_materno_padre')->nullable();
            $table->string('direccion_padre')->nullable();
            $table->string('correo_padre')->nullable();
            $table->string('telefono_padre')->nullable();
            // 
            $table->string('forma_pago_pensiones')->nullable();
            $table->string('cedula_ruc')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('direccion_facturacion')->nullable();
            $table->json('referencia_familiar')->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculacion');
    }
};
