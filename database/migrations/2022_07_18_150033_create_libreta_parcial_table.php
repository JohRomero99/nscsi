<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibretaParcialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libreta_parcial', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('libreta_id')->unsigned()->nullable();
            $table->bigInteger('area_asignatura_id')->unsigned()->nullable();
            $table->string('area_asignatura_nombre', 255)->nullable();
            $table->bigInteger('asignatura_id')->unsigned()->nullable();
            $table->integer('orden')->nullable();
            $table->string('asignatura_nombre', 255)->nullable();
            $table->decimal('e1_cuant', 4, 2)->nullable();
            $table->string('e1_cual', 255)->nullable();
            $table->decimal('e2_cuant', 4, 2)->nullable();
            $table->string('e2_cual', 255)->nullable();
            $table->decimal('e3_cuant', 4, 2)->nullable();
            $table->string('e3_cual', 255)->nullable();
            $table->decimal('e4_cuant', 4, 2)->nullable();
            $table->string('e4_cual', 255)->nullable();
            $table->decimal('e5_cuant', 4, 2)->nullable();
            $table->string('e5_cual', 255)->nullable();
            
            $table->decimal('promedio_cuant', 4, 2)->nullable();
            $table->string('promedio_cual', 255)->nullable();
            $table->integer('prest')->nullable();
            $table->integer('falt_just')->nullable();
            $table->integer('falt_injust')->nullable();
            $table->integer('atraso')->nullable();
            $table->string('estado', 255)->nullable()->default('PENDIENTE');
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
        Schema::dropIfExists('libreta_parcial');
    }
}
