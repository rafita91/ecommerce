<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInShoppingCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('in_shopping_cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();  
            $table->integer('shopping_car_id')->unsigned();  
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('shopping_car_id')->references('id')->on('shopping_cars');
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
        //
        Schema::drop('in_shopping_cars');
    }
}
