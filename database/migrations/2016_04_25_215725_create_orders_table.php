<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('order_id');
            $table->integer('customer_id')->unsigned();
            $table->DateTime('order_date');
            $table->date('shipped_date');
            $table->integer('shipper_id')->unsigned();
            $table->string('freigth')->length(20);
            $table->string('ship_name')->length(20);
            $table->string('ship_address')->length(75);
            $table->string('ship_city')->length(20);
            $table->string('ship_region')->length(20);
            $table->string('ship_postal_code')->length(10);
            $table->string('ship_country')->length(20);
            $table->timestamps();

            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->foreign('shipper_id')->references('shipper_id')->on('shippers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
