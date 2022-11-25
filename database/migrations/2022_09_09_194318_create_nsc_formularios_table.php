<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNscFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsc_formulario', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion')->nullable();
            $table->bigInteger('paso_proceso_id')->unsigned()->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();

            $table->foreign('paso_proceso_id')
                    ->references('id')
                    ->on('nsc_paso_proceso')
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
        Schema::dropIfExists('nsc_formulario');
    }
}
