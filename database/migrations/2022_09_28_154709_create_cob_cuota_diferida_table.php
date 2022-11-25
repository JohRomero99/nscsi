<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCobCuotaDiferidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cob_cuota_diferida', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_financiamiento')->nullable();
            $table->unsignedBigInteger('representante_id')->nullable();
            $table->unsignedBigInteger('cob_tipo_diferido_id')->nullable();
            $table->unsignedBigInteger('cob_num_cuota_id')->nullable();
            $table->decimal("cuota", 8, 2)->nullable();
            $table->string("estado")->nullable();
            $table->timestamps();

            $table->foreign('cob_num_cuota_id')
                ->references('id')
                ->on('cob_num_cuota')
                ->onDelete('set null');

            $table->foreign('cob_tipo_diferido_id')
                ->references('id')
                ->on('cob_tipo_credito')
                ->onDelete('set null');

            $table->foreign('representante_id')
                ->references('id')
                ->on('nsc_representante')
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
        Schema::dropIfExists('cob_cuota_diferida');
    }
}
