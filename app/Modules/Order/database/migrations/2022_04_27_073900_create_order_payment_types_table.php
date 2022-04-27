<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPaymentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_payment_types', function (Blueprint $table) {
            $table->foreignId('order_id')
                ->constrained('orders')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('payment_type_id')
                ->constrained('payment_types')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_payment_types', function (Blueprint $table) {
            $table->dropForeign(['order_id', 'payment_type_id']);
        });

        Schema::dropIfExists('order_payment_types');
    }
}
