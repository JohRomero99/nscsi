<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCobConceptoCobroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cob_concepto_cobro', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->decimal('valor_normal', 8, 2);
            $table->decimal('valor_descontado', 8, 2);
            $table->date('fecha_vencimiento');
            $table->string('ano_lectivo');
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
        Schema::dropIfExists('cob_concepto_cobro');
    }
}
