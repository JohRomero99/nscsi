<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAymInstitucionesEducativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aym_instituciones_educativas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->nullable();
            $table->string('provincia')->nullable();
            $table->string('canton')->nullable();
            $table->string('parroquia')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('nombre_institucion')->nullable();
            $table->string('sostenimiento')->nullable();
            $table->string('estado')->nullable();
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
        Schema::dropIfExists('aym_instituciones_educativas');
    }
}
