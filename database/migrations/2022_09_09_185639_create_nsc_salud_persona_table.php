<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNscSaludPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsc_salud_persona', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('persona_id')->unsigned()->nullable();
            $table->decimal('peso', 5, 2)->nullable();
            $table->decimal('estatura', 5, 2)->nullable();
            $table->date('fecha_ultima_desparacitacion')->nullable();
            $table->boolean('vacunas')->nullable()->default(false);
            $table->boolean('alergias')->nullable()->default(false);
            $table->boolean('enfermedades_accidentes')->nullable()->default(false);
            $table->boolean('intervenciones_quirurgicas')->nullable()->default(false);
            $table->boolean('medicamentos')->nullable()->default(false);
            $table->boolean('discapacidad')->nullable()->default(false);
            $table->string('carnet_discapacidad')->nullable();
            $table->boolean('aparatos_ayuda')->nullable()->default(false);
            $table->boolean('dificultades_dormir')->nullable()->default(false);
            $table->boolean('antecendetes_patologicos_familiares')->nullable()->default(false);
            $table->boolean('seguro')->nullable()->default(false);
            $table->string('tipo_persona')->nullable();
            $table->string('estado')->nullable();
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
        Schema::dropIfExists('nsc_salud_persona');
    }
}
