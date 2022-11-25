<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAymOtrasInstitucionesEducativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aym_otras_instituciones_educativas', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('persona_id')->unsigned()->nullable();
            $table->string('detalle', 255)->nullable();
            $table->string('estado', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aym_otras_instituciones_educativas');
    }
}
