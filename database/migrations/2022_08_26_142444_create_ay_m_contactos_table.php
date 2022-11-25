<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyMContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aym_contactos', function (Blueprint $table) {
            $table->id();
            $table->string('representante_ci')->nullable();
            $table->string('representante_nombres')->nullable();
            $table->string('representante_apellidos')->nullable();
            $table->string('representante_celular')->nullable();
            $table->string('representante_email')->nullable();
            $table->string('estudiante_ci')->unique()->nullable();
            $table->string('estudiante_apellido_paterno')->nullable();
            $table->string('estudiante_apellido_materno')->nullable();
            $table->string('estudiante_primer_nombre')->nullable();
            $table->string('estudiante_segundo_nombre')->nullable();
            $table->string('anio_academico')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('tipo')->default('A')->nullable();
            $table->string('estado')->default('0')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aym_contactos');
    }
}
