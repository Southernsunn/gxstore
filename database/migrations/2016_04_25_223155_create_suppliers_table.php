<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('supplier_id');
            $table->string('company_name')->length(30);
            $table->string('contact_name')->length(30);
            $table->string('contact_title')->length(20)->nullable();
            $table->string('address')->length(75);
            $table->string('city')->length(20);
            $table->string('region')->length(20)->nullable();
            $table->string('postal_code')->length(10);
            $table->string('country')->length(20);
            $table->string('phone')->length(20);
            $table->string('email')->length(50)->unique();
            $table->string('web_site')->length(100)->unique();
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
        Schema::drop('suppliers');
    }
}
