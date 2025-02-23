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
        Schema::create('persona', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('cedula')->nullable();
            $table->string('primer_nombre')->nullable();
            $table->string('segundo_nombre')->nullable();
            $table->string('apellido_paterno')->nullable();
            $table->string('apellido_materno')->nullable();
            $table->unsignedBigInteger('sexo_id')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->unsignedBigInteger('lugar_nacimiento_id')->nullable();
            $table->unsignedBigInteger('nacionalidad_id')->nullable();
            $table->string('telefono_celular')->nullable();
            $table->string('telefono_domicilio')->nullable();
            $table->string('direccion_domiciliaria')->nullable();
            $table->string('scan_cedula_front')->nullable();
            $table->string('scan_cedula_back')->nullable();
            $table->string('dir_scan_cedula_front')->nullable();;
            $table->string('estado')->nullable();
            $table->string('avatar')->nullable();
            $table->timestamps();

            $table->foreign('lugar_nacimiento_id')->references('id')->on('lugar_nacimiento')->onDelete('cascade');
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidad')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('sexo_id')->references('id')->on('sexo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
