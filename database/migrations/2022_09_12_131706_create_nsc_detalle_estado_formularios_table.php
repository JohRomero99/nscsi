<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNscDetalleEstadoFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsc_detalle_estado_formulario', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('estado_fomulario_id')->unsigned()->nullable();
            $table->bigInteger('persona_id')->unsigned()->nullable();
            $table->string('tipo_persona', 255)->nullable();
            $table->string('estado', 100)->nullable();
            $table->timestamps();
            $table->foreign('estado_fomulario_id')
                    ->references('id')
                    ->on('nsc_estado_formulario')
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
        Schema::dropIfExists('nsc_detalle_estado_formulario');
    }
}
