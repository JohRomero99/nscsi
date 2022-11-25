<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsrCodigoUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usr_codigo_usuario', function (Blueprint $table) {
            $table->id();
            $table->string('representante_ci')->unique()->nullable();
            $table->bigInteger('rol')->nullable();
            $table->string('email')->nullable();
            $table->string('codigo')->unique()->nullable();
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('estado')->default('0')->nullable();
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
        Schema::dropIfExists('usr_codigo_usuario');
    }
}
