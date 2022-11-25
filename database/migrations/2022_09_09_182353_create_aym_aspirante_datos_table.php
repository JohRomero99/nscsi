<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAymAspiranteDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aym_aspirante_datos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('persona_id')->unsigned()->nullable();
            $table->string('estado')->default('0')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('aym_aspirante_datos');
    }
}
