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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->integer('lft');
            $table->integer('rgt');
            $table->tinyInteger('depth');

            $table->unsignedBigInteger('parent_id')->nullable();

            $table->index(['parent_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropIndex('categories_parent_id_index');
        });

        Schema::dropIfExists('categories');
    }
};
