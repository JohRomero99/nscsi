<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNscSeguroPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsc_seguro_persona', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('salud_persona_id')->unsigned()->nullable();
            $table->string('descripcion')->nullable();
            $table->string('aseguradora')->nullable();
            $table->string('telefono')->nullable();
            $table->string('contacto_emergencia')->nullable();
            $table->string('tipo_persona')->nullable();
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
        Schema::dropIfExists('nsc_seguro_persona');
    }
}
