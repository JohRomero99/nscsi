<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNscEstudianteRepresentantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsc_estudiante_representante', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('estudiante_id')->unsigned()->nullable();
            $table->bigInteger('representante_id')->unsigned()->nullable();
            $table->bigInteger('parentesco_id')->unsigned()->nullable();
            $table->string('representacion_legal')->nulleable();
            $table->string('estado')->nulleable();
            $table->timestamps();

            $table->foreign('estudiante_id')
                    ->references('id')
                    ->on('nsc_estudiante')
                    ->onDelete('set null');

            $table->foreign('representante_id')
                    ->references('id')
                    ->on('nsc_representante')
                    ->onDelete('set null');
            $table->foreign('parentesco_id')
                    ->references('id')
                    ->on('nsc_parentesco')
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
        Schema::dropIfExists('nsc_estudiante_representante');
    }
}
