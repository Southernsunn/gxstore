<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->integer('user_id')->unsigned();
            $table->string('first_name')->length(20);
            $table->string('second_name')->length(20)->nullable();
            $table->string('last_name')->length(20);
            $table->string('company_name')->length(30)->nullable();
            $table->string('address')->length(75);
            $table->string('city')->length(20);
            $table->string('region')->length(20);
            $table->string('postal_code')->length(10);
            $table->string('country')->length(20);
            $table->string('phone')->length(20);
            $table->string('email')->unique()->length(50);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}
