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
            $table->uuid('id')->primary();
            $table->mediumText('orders_id')->nullable();
            $table->uuid('user_id');
            $table->boolean('guest_order')->default(0);
            $table->decimal('amount',15,2)->default(0);
            $table->decimal('taxes',15,2)->default(0);
            $table->decimal('shipping_fee',15,2)->default(0);
            $table->decimal('subtotal',15,2)->default(0);
            $table->decimal('total')->default(0);
            $table->integer('order_status')->nullable();
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
