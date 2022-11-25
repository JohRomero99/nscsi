<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsc_estudiante', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('persona_id')->unsigned()->nullable();
            $table->string('matricula_numero')->nullable();
            $table->string('anio_academico')->nullable();
            $table->string('curso')->nullable();
            $table->bigInteger('usr_moodle_id')->nullable();
            $table->string('estado')->default('0')->nullable();
            $table->timestamps();

            $table->foreign('persona_id')
                ->references('id')
                ->on('nsc_persona')
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
        Schema::dropIfExists('nsc_estudiante');
    }
}
