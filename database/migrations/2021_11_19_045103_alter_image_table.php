<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->longText('image2')->nullable();
            $table->longText('image3')->nullable();
            $table->longText('thumb1')->nullable();
            $table->longText('thumb2')->nullable();
            $table->longText('thumb3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropColumn('image2')->nullable();
            $table->dropColumn('image3')->nullable();
            $table->dropColumn('thumb1')->nullable();
            $table->dropColumn('thumb2')->nullable();
            $table->dropColumn('thumb3')->nullable();
        });
    }
}
