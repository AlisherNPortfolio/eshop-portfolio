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
        Schema::create('option_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('option_id')
                ->constrained('options')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->text('value');
            $table->tinyInteger('is_translatable')->default(0)->comment('0 - false, 1 - true');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('option_items', function (Blueprint $table) {
            $table->dropForeign(['option_id']);
        });

        Schema::dropIfExists('option_items');
    }
};
