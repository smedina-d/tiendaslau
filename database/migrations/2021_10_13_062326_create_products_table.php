<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('sku');
            $table->longText('name');
            $table->uuid('category')->nullable();
            $table->decimal('price', 15, 2)->default(0);
            $table->decimal('taxes', 15, 2)->default(0);
            $table->integer('discount')->default(0);
            $table->longText('minimal_description')->nullable();
            $table->longText('description')->nullable();
            $table->longText('additional_info')->nullable();
            $table->mediumText('brand')->nullable();
            $table->decimal('stars', 1, 1)->default(0);
            $table->bigInteger('quantity')->default(100);
            $table->boolean('refundable')->default(0);
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
        Schema::dropIfExists('products');
    }
}
