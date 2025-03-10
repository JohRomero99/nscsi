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
            $table->string('ano_basica')->nullable();
            $table->string('nuevo_nsc')->nullable();
            $table->string('codigo_unico_electrico')->nullable();
            $table->string('genero_estudiante')->nullable();
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
            $table->string('relacion_representante_uno')->nullable();
            // 
            $table->string('cedula_padre')->nullable();
            $table->string('primer_nombre_padre')->nullable();
            $table->string('segundo_nombre_padre')->nullable();
            $table->string('apellido_paterno_padre')->nullable();
            $table->string('apellido_materno_padre')->nullable();
            $table->string('direccion_padre')->nullable();
            $table->string('correo_padre')->nullable();
            $table->string('telefono_padre')->nullable();
            $table->string('relacion_representante_dos')->nullable();
            // 
            $table->string('forma_pago_pensiones')->nullable();
            $table->string('facturacion')->nullable();
            $table->string('cedula_ruc')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('direccion_facturacion')->nullable();
            $table->string('correo_facturacion')->nullable();
            $table->string('telefono_facturacion')->nullable();
            $table->string('primera_referencia_familiar_nombres')->nullable();
            $table->string('primera_referencia_familiar_cedula')->nullable();
            $table->string('primera_referencia_familiar_telefono')->nullable();
            $table->string('primera_referencia_familiar_modalidad')->nullable();
            $table->string('segunda_referencia_familiar_nombres')->nullable();
            $table->string('segunda_referencia_familiar_cedula')->nullable();
            $table->string('segunda_referencia_familiar_telefono')->nullable();
            $table->string('segunda_referencia_familiar_modalidad')->nullable();
            $table->string('tercera_referencia_familiar_nombres')->nullable();
            $table->string('tercera_referencia_familiar_cedula')->nullable();
            $table->string('tercera_referencia_familiar_telefono')->nullable();
            $table->string('tercera_referencia_familiar_modalidad')->nullable();
            $table->string('informacion_verdadera')->nullable();
            $table->string('autorizacion_nombres_representante')->nullable();
            $table->string('autorizacion_cedula_representante')->nullable();
            $table->string('autorizacion_nombres_estudiante')->nullable();
            $table->string('autorizacion_cedula_estudiante')->nullable();
            $table->string('autorizacion_curso_estudiante')->nullable();
            $table->string('autorizacion_direccion_representante')->nullable();
            $table->string('autorizacion_telefono_representante')->nullable();
            $table->string('autorizacion_email_representante')->nullable();
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
