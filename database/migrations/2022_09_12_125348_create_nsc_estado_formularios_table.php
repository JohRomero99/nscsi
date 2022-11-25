<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNscEstadoFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsc_estado_formulario', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('formulario_id')->unsigned()->nullable();
            $table->date('fecha')->nullable();
            $table->integer('porcentaje')->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();
            $table->foreign('formulario_id')
                    ->references('id')
                    ->on('nsc_formulario')
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
        Schema::dropIfExists('nsc_estado_formulario');
    }
}
