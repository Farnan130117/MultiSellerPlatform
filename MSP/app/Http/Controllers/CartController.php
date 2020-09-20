<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // cart related functions start


   // add products to the cart
     public function add(Product $product)//$productId
    {
        //
        //dd($productId);
        //dd($product);

        // add the product to cart
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));



       // return redirect()->route('cart.index');
       return back();

    }

   //cart index with all products
    public function index()
    {

        $cartItems = \Cart::session(auth()->id())->getContent();


        return view('cart.index', compact('cartItems'));
    }

   // destroy cart element
    public function destroy($itemId)
    {

       \Cart::session(auth()->id())->remove($itemId);

        return back();
    }

   // update cart
    public function update($rowId)
    {

        \Cart::session(auth()->id())->update($rowId, [
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity')
            )
        ]);

        return back();
    }

    

    // checkout 
 	public function checkout()
    {
    	return view('cart.checkout');
    }

    // cart related functions end

}
