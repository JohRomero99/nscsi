<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsc_representante', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('persona_id')->unsigned()->nullable();
            $table->unsignedBigInteger('user_id')->unique()->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();

            $table->foreign('persona_id')
                    ->references('id')
                    ->on('nsc_persona')
                    ->onDelete('set null');

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
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
        Schema::dropIfExists('nsc_representante');
    }
}
