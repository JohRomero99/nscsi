<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNscDetalleEstadoPasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsc_detalle_estado_pasos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('estado_paso_id')->unsigned()->nullable();
            $table->bigInteger('persona_id')->unsigned()->nullable();
            $table->string('tipo_persona')->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();
            $table->foreign('estado_paso_id')
                    ->references('id')
                    ->on('nsc_estado_paso')
                    ->onDelete('set null');
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
        Schema::dropIfExists('nsc_detalle_estado_pasos');
    }
}
