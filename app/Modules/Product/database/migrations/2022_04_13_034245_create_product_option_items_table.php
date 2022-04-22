<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_option_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')
                ->constrained('products')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('option_item_id')
                ->constrained('option_items')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->float('price');
            $table->float('qty');
            $table->tinyInteger('is_default')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_option_items', function (Blueprint $table) {
            $table->dropForeign(['product_id', 'option_item_id']);
        });

        Schema::dropIfExists('product_option_items');
    }
};
