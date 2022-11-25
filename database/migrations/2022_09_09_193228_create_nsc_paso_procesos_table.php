<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNscPasoProcesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsc_paso_proceso', function (Blueprint $table) {
            $table->id();
            $table->integer('numero')->nullable();
            $table->string('descripcion')->nullable();
            $table->bigInteger('proceso_id')->unsigned()->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();

            $table->foreign('proceso_id')
                    ->references('id')
                    ->on('nsc_proceso')
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
        Schema::dropIfExists('nsc_paso_proceso');
    }
}
