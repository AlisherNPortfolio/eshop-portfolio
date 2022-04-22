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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('brand_id')
                ->constrained('brands')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('shop_id')
                ->constrained('shops')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('category_id')
                ->constrained('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->text('name');
            $table->text('unique_name')->unique();
            $table->longText('description');
            $table->string('sku')->default('000000');
            $table->integer('rating')->default(0);
            $table->float('price')->default(0);
            $table->float('quantity')->default(0);
            $table->tinyInteger('has_attribute')->default(0)->comment('0 - false, 1 - true');
            $table->tinyInteger('stock_status')->default(false);
            $table->tinyInteger('product_status')->default(1)->comment('1 - NEW, 2 - SALE, 3 - STANDARD');
            $table->string('image');
            $table->tinyInteger('recommended')->default(0);
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
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['user_id', 'brand_id', 'category_id', 'shop_id']);
        });

        Schema::dropIfExists('products');
    }
};
