<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')
                ->constrained('orders')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('payment_period_id')
                ->constrained('payment_periods')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->float('monthly_price');
            $table->integer('month');
            $table->tinyInteger('status')
                ->default(0)
                ->comment('0-NOT_PAYED, 1-PAYED');
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
        Schema::create('order_payments', function (Blueprint $table) {
            $table->dropForeign('order_id');
        });

        Schema::dropIfExists('order_payments');
    }
}
