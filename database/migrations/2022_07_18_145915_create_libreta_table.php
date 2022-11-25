<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibretaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libretas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('anio_lectivo_id')->unsigned()->nullable();
            $table->bigInteger('curso_nsc_id')->unsigned()->nullable();
            $table->string('curso_nombre', 255)->nullable();
            $table->string('quimestre', 255)->nullable();
            $table->string('parcial', 255)->nullable();
            $table->string('usr_tutor', 255)->nullable();
            $table->string('tutor', 255)->nullable();
            $table->string('estudiante_id', 255)->nullable();
            $table->string('estudiante_ci', 255)->nullable();
            $table->string('estudiante_nombre', 255)->nullable();
            $table->string('comportamiento', 255)->nullable();
            $table->string('descripcion', 255)->nullable();
            $table->string('informe', 255)->nullable();
            $table->string('prest', 255)->nullable();
            $table->string('falt_just', 255)->nullable();
            $table->string('falt_inju', 255)->nullable();
            $table->string('atrasos', 255)->nullable();
            $table->decimal('promedio_cuant', 4, 2)->nullable();
            $table->string('promedio_cual', 255)->nullable();
            $table->string('tipo_libreta', 255)->nullable();
            $table->string('usr_genera', 255)->nullable();
            $table->string('revisor', 255)->nullable();
            $table->string('estado', 255)->nullable()->default('PENDIENTE');
            $table->timestamps();

            $table->foreign('anio_lectivo_id')
            ->references('id')
            ->on('anios_lectivos')
            ->onDelete('set null');

            $table->foreign('curso_nsc_id')
            ->references('id')
            ->on('cursos')
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
        Schema::dropIfExists('libretas');
    }
}
