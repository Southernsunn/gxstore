<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingCartsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_carts_details', function (Blueprint $table) {
            $table->increments('scd_id');
            $table->integer('shopping_cart_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->tinyInteger('quantity');
            $table->timestamps();

            $table->foreign('shopping_cart_id')->references('shopping_cart_id')->on('shopping_carts');
            $table->foreign('product_id')->references('product_id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shopping_carts_details');
    }
}
