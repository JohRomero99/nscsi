<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNscItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsc_item', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion')->nullable();
            $table->boolean('requerido')->nullable()->default(false);
            $table->bigInteger('formulario_id')->unsigned()->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();
            $table->foreign('formulario_id')
                    ->references('id')
                    ->on('nsc_formulario')
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
        Schema::dropIfExists('nsc_item');
    }
}
