<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCobValoresMaxDiferirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cob_valores_max_diferir', function (Blueprint $table) {
            $table->id();
            $table->decimal('diferir_a_partir',10,2)->nullable();
            $table->unsignedBigInteger('num_cuota')->nullable();
            $table->timestamps();

            $table->foreign('num_cuota')
                ->references('id')
                ->on('cob_num_cuota')
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
        Schema::dropIfExists('cob_valores_max_diferir');
    }
}
