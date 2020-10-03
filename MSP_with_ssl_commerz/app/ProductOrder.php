<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    //

    public function items()
    {
          return $this->belongsToMany(Product::class, 'order_items', 'product_order_id', 'product_id')->withPivot('quantity', 'price');
    }

     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
