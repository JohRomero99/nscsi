<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnulaLibretasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anula_libretas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('libreta_id')->unsigned()->nullable();
            $table->string('username', 255)->nullable();
            $table->string('motivo', 255)->nullable();
            $table->string('estado', 255)->nullable();
            $table->timestamps();

            $table->foreign('libreta_id')
                    ->references('id')
                    ->on('libretas')
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
        Schema::dropIfExists('anula_libretas');
    }
}
