<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('product_id');
            $table->integer('supplier_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('product_cod')->length(20)->unique();
            $table->string('product_name')->length(30);
            $table->string('description')->length(150);
            $table->decimal('cost', 5, 2);
            $table->decimal('price', 5, 2);
            $table->smallInteger('quantity');
            $table->string('attachment')->length(100)->nullable();
            $table->timestamps();

            $table->foreign('supplier_id')->references('supplier_id')->on('suppliers');
            $table->foreign('category_id')->references('category_id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
