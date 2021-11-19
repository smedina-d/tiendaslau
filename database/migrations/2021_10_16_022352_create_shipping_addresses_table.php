<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_addresses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->longText('full_name');
            $table->integer('country_id');
            $table->longText('address_1');
            $table->longText('address_2');
            $table->longText('state_province_region')->nullable();
            $table->longText('city')->nullable();
            $table->longText('colony')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->integer('cp')->nullable();
            $table->longText('shipping_directions')->nullable();
            $table->boolean('is_default')->nullable();
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
        Schema::dropIfExists('shipping_addresses');
    }
}
