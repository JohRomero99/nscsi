<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNscPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsc_persona', function (Blueprint $table) {
            $table->id();
            $table->string('cedula')->unique()->nullable();
            $table->string('apellido_paterno')->nullable();
            $table->string('apellido_materno')->nullable();
            $table->string('primer_nombre')->nullable();
            $table->string('segundo_nombre')->nullable();
            $table->string('sexo')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->bigInteger('lugar_nacimiento_id')->unsigned()->nullable();
            $table->bigInteger('nacionalidad_id')->unsigned()->nullable();
            $table->string('telefono_celular')->nullable();
            $table->string('telefono_domicilo')->nullable();
            $table->string('direccion_domiciliaria')->nullable();
            $table->string('correo')->nullable();
            $table->string('scan_cedula', 255)->nullable();
            $table->string('dir_scan_cedula', 255)->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();

            $table->foreign('lugar_nacimiento_id')
                    ->references('id')
                    ->on('nsc_lugar_nacimiento')
                    ->onDelete('set null');
            $table->foreign('nacionalidad_id')
                    ->references('id')
                    ->on('nsc_nacionalidad')
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
        Schema::dropIfExists('nsc_persona');
    }
}
