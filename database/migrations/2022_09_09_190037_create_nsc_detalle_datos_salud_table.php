<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNscDetalleDatosSaludTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsc_detalle_datos_salud', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion')->nullable();
            $table->string('item')->nullable();
            $table->bigInteger('salud_persona_id')->unsigned()->nullable();
            $table->string('detalle')->nullable();
            $table->date('fecha')->nullable();
            $table->integer('porcentaje')->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();

            $table->foreign('salud_persona_id')
                    ->references('id')
                    ->on('nsc_salud_persona')
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
        Schema::dropIfExists('nsc_detalle_datos_salud');
    }
}
