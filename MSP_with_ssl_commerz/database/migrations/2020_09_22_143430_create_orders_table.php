<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            //

            $table->string('name')->nullable;
            $table->string('email')->nullable;
            $table->string('phone')->nullable;
            $table->string('amount')->nullable;
            $table->string('address')->nullable;
            $table->string('status')->nullable;
            $table->string('transaction_id')->nullable;
//  $table->foreign('transaction_id')->references('product_order_number')->on('product_orders')->onDelete('cascade'); 
            //linked orders table with product_orders with the foreign key(product_order_number)

            $table->string('currency')->nullable;
            
            //

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
        Schema::dropIfExists('orders');
    }
}
