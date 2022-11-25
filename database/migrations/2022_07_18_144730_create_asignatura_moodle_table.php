<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaturaMoodleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaturas_moodle', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('asignatura_id')->unsigned()->nullable();
            $table->String('peso')->nullable();
            $table->String('asignatura_moodle_id')->nullable();
            $table->bigInteger('curso_nsc_id')->unsigned()->nullable();
            $table->String('estado')->nullable();
            $table->timestamps();

            $table->foreign('asignatura_id')
            ->references('id')
            ->on('asignaturas_libretas')
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
        Schema::dropIfExists('asignaturas_moodle');
    }
}
