<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibretaQuimestralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libreta_quimestral', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('libreta_id')->unsigned()->nullable();
            $table->bigInteger('area_asignatura_id')->unsigned()->nullable();
            $table->string('area_asignatura_nombre', 255)->nullable();
            $table->integer('orden')->nullable();
            $table->bigInteger('asignatura_id')->unsigned()->nullable();
            $table->string('asignatura_nombre', 255)->nullable();
            $table->decimal('p1_cuant', 4, 2)->nullable();
            $table->string('p1_cual', 100)->nullable();
            $table->decimal('p2_cuant', 4, 2)->nullable();
            $table->string('p2_cual', 100)->nullable();
            $table->decimal('promedio_p1_p2_cuant', 4, 2)->nullable();
            $table->string('promedio_p1_p2_cual', 100)->nullable();
            $table->decimal('promedio_p1_p2_cuant_80', 4, 2)->nullable();
            $table->decimal('examen_cuant', 4, 2)->nullable();
            $table->string('examen_cual', 100)->nullable();
            $table->decimal('examen_cuant_20', 4, 2)->nullable();
            $table->decimal('promedio_cuant', 4, 2)->nullable();
            $table->string('promedio_cual', 100)->nullable();
            $table->integer('prest')->nullable();
            $table->integer('falt_just')->nullable();
            $table->integer('falt_injust')->nullable();
            $table->integer('atraso')->nullable();
            $table->string('estado', 100)->nullable()->default('PENDIENTE');
            $table->timestamps();

            $table->foreign('libreta_id')
            ->references('id')
            ->on('libretas')
            ->onDelete('set null');

            $table->foreign('area_asignatura_id')
            ->references('id')
            ->on('areas_asignaturas')
            ->onDelete('set null');

            $table->foreign('asignatura_id')
            ->references('id')
            ->on('asignaturas_libretas')
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
        Schema::dropIfExists('libreta_quimestral');
    }
}
