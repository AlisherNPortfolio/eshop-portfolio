<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')
                ->constrained('orders')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('product_option_item_id')
                ->constrained('product_option_items')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->float('price');
            $table->float('qty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->dropForeign(['order_id', 'product_option_item_id']);
        });

        Schema::dropIfExists('order_items');
    }
}
