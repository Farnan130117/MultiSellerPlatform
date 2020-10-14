<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable= ['name','email','phone','amount','address','status','transaction_id','currency'];
 
 /*
    public function ProductOrder()
    {
        return $this->belongsTo(ProductOrder::class,'product_order_number');
    }
  */
}
