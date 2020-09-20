<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
         //   $table->id();
         //
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id'); // coming from orders table
            $table->unsignedBigInteger('product_id'); // coming from products table
        // coming from productss table
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade'); 
        // coming from orders table
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');  

            $table->float('price');
            $table->integer('quantity');

            $table->timestamps();

          //  $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
