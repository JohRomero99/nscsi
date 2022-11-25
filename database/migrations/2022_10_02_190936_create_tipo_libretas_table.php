<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoLibretasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsc_tipo_libretas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_libreta', 255)->nullable();
            $table->string('detalle', 255)->nullable();
            $table->string('estado', 100)->nullable()->default('A');
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
        Schema::dropIfExists('nsc_tipo_libretas');
    }
}
