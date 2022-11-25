<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaturaLibretaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaturas_libretas', function (Blueprint $table) {
            $table->id();
            $table->String('nivel')->nullable();
            $table->bigInteger('anio_lectivo_id')->unsigned()->nullable();
            $table->bigInteger('area_asignatura_id')->unsigned()->nullable();
            $table->String('area_asignatura_nombre')->nullable();
            $table->String('nombre_asignatura')->nullable();
            $table->String('orden')->nullable();
            $table->String('tipo')->nullable();
            $table->String('estado')->nullable();
            $table->timestamps();

            $table->foreign('anio_lectivo_id')
            ->references('id')
            ->on('anios_lectivos')
            ->onDelete('set null');
            
            $table->foreign('area_asignatura_id')
            ->references('id')
            ->on('areas_asignaturas')
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
        Schema::dropIfExists('asignaturas_libretas');
    }
}
