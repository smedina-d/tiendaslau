<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->longText('session_id')->nullable();
            $table->boolean('is_user')->default(0);
            $table->uuid('user_id')->nullable();
            $table->uuid('product_id')->nullable();
            $table->decimal('unit_price',16,2)->default(0);
            $table->integer('quantity')->nullable();
            $table->decimal('prod_total',16,2)->default(0);
            $table->boolean('is_abandoned')->default(0);
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
        Schema::dropIfExists('carts');
    }
}
