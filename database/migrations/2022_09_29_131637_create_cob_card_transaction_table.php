<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCobCardTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cob_card_transaction', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cob_voucher_id')->nullable();
            $table->string('bin')->nullable();
            $table->string('status')->nullable();
            $table->string('token')->nullable();
            $table->string('expiry_year')->nullable();
            $table->string('expiry_month')->nullable();
            $table->string('type')->nullable();
            $table->string('number')->nullable();
            $table->string('origin')->nullable();
            $table->timestamps();

            $table->foreign('cob_voucher_id')
                ->references('id')
                ->on('cob_voucher')
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
        Schema::dropIfExists('cob_card_transaction');
    }
}