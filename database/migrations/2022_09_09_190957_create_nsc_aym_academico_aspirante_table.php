<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNscAymAcademicoAspiranteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aym_academico_aspirante', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('persona_id')->unsigned()->nullable();;
            $table->bigInteger('institucion_id')->unsigned()->nullable();
            $table->boolean('otra_institucion')->nullable()->default(false);
            $table->date('fecha_ingreso_institucion')->nullable();
            $table->string('ha_repetido')->nullable();
            $table->string('anios_repetidos')->nullable();
            $table->string('asignaturas_preferidas')->nullable();
            $table->string('asignaturas_dificultad')->nullable();
            $table->string('logros_academicos')->nullable();
            $table->string('scan_libreta',255)->nullable();
            $table->string('scan_libreta_dir',255)->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();

            $table->foreign('persona_id')
                    ->references('id')
                    ->on('nsc_persona')
                    ->onDelete('set null');
            $table->foreign('institucion_id')
                    ->references('id')
                    ->on('aym_instituciones_educativas')
                    ->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aym_academico_aspirante');
    }
}
