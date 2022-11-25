<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCobVoucherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cob_voucher', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('representante_id')->nullable();
            $table->unsignedBigInteger('cuota_id')->nullable();
            $table->string('transaction_reference')->nullable();
            $table->string('status_transaction')->nullable();
            $table->string('authorization_code')->nullable();
            $table->string('status_detail')->nullable();
            $table->string('message')->nullable();
            $table->string('payment_date')->nullable();
            $table->string('payment_method_type')->nullable();
            $table->string('dev_reference')->nullable();
            $table->string('carrier_code')->nullable();
            $table->string('product_description')->nullable();
            $table->string('current_status')->nullable();
            $table->decimal('amount', 8, 2)->nullable();
            $table->string('carrier')->nullable();
            $table->string('installments')->nullable();
            $table->string('installments_type')->nullable();
            $table->unsignedBigInteger('cob_cuota_diferida_id')->nullable();
            $table->string('estado_reembolso')->nullable();
            $table->string('detalle_reembolso')->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();

            $table->foreign('representante_id')
                ->references('id')
                ->on('nsc_representante')
                ->onDelete('set null');
            
            $table->foreign('cuota_id')
                ->references('id')
                ->on('cob_cuota_diferida')
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
        Schema::dropIfExists('cob_voucher');
    }
}
