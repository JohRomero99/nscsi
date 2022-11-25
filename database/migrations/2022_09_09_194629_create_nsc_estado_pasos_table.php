<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNscEstadoPasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsc_estado_paso', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('paso_proceso_id')->unsigned()->nullable();
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
        Schema::dropIfExists('nsc_estado_paso');
    }
}
