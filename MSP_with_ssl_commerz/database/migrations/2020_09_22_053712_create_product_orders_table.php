<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_orders', function (Blueprint $table) {
           // $table->id();
            //
            $table->bigIncrements('id');

            $table->string('product_order_number'); //unique id
            $table->unsignedBigInteger('user_id'); // auth user
            $table->enum('status', ['pending','processing','completed','decline'])->default('pending'); 
            // order status
            $table->boolean('is_paid')->default(false);//Payment status
            $table->float('grand_total'); // coming from cart session
            $table->integer('item_count'); // coming from cart session
            $table->boolean('is_paid')->default(false);
          //  $table->enum('payment_method', ['cash_on_delivery','ssl_commerz','paypal','stripe','card'])->default('cash_on_delivery');

            $table->enum('payment_method', ['cash_on_delivery','ssl_commerz','paypal','stripe','card']);

            
            $table->string('shipping_fullname'); // coming from checkout form
            $table->string('shipping_address');  // coming from checkout form
            $table->string('shipping_city');     // coming from checkout form
            $table->string('shipping_state');    // coming from checkout form
            $table->string('shipping_zipcode');  // coming from checkout form
            $table->string('shipping_phone');    // coming from checkout form
            $table->string('notes')->nullable(); // coming from checkout form

            $table->string('billing_fullname');
            $table->string('billing_address');
            $table->string('billing_city');
            $table->string('billing_state');
            $table->string('billing_zipcode');
            $table->string('billing_phone');

            // linked with user table
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 


            $table->timestamps();
            //
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_orders');
    }
}
