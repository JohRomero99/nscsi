<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('anio_lectivo_id')->unsigned()->nullable();
            $table->String('curso_moodle_id')->nullable();
            $table->Integer('orden')->nullable();
            $table->String('curso_nombre')->nullable();
            $table->String('curso_num')->nullable();
            $table->String('paralelo')->nullable();
            $table->String('nivel_edu')->nullable();
            $table->String('curso_nombre_completo')->nullable();
            $table->String('curso_nombre_completo_sig')->nullable();
            $table->String('estado')->nullable();
            $table->timestamps();

            $table->foreign('anio_lectivo_id')
            ->references('id')
            ->on('anios_lectivos')
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
        Schema::dropIfExists('cursos');
    }
}
