<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('seller_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('delivery_region_id')
                ->constrained('regions')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('delivery_district_id')
                ->constrained('districts')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->text('customer_comment')->nullable();
            $table->text('seller_comment')->nullable();
            $table->float('total_price');
            $table->tinyInteger('status')
                ->default(1)
                ->comment('1-NEW, 2-ACCEPTED, 3-PROCESSING, 4-ON_DELIVERY, 5-RECEIVED, 6-SENT_BACK');
            $table->tinyInteger('payment_status')
                ->default(1)
                ->comment('1-NOT_PAYED, 2-ON_PAYMENT, 3-PAYED');
            $table->tinyInteger('has_installment')
                ->default(0)
                ->comment('0-NO,1-YES');
            $table->float('initial_payment')->default(0);
            $table->integer('installment_months')->default(0);
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
        Schema::dropIfExists('orders');
    }
}
