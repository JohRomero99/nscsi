<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNscLugarNacimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsc_lugar_nacimiento', function (Blueprint $table) {
            $table->id();
            $table->string('ciudad', 255)->nullable();
            $table->string('provincia', 255)->nullable();
            $table->string('estado', 100)->default('1')->nullable();
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
        Schema::dropIfExists('nsc_lugar_nacimiento');
    }
}
