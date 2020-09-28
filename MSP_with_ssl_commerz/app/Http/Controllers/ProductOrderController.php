<?php

namespace App\Http\Controllers;

use App\ProductOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());

        // validate form data
        $request->validate([
            'shipping_fullname' => 'required',
            'shipping_state' => 'required',
            'shipping_city' => 'required',
            'shipping_address' => 'required',
            'shipping_phone' => 'required',
            'shipping_zipcode' => 'required',
            'payment_method' => 'required',
        ]);

        $order = new ProductOrder(); // create new productorder

        $order->product_order_number = uniqid('ProductOrderNumber-');  // Unique order number

        $order->shipping_fullname = $request->input('shipping_fullname'); // Coming from checkout form
        $order->shipping_state = $request->input('shipping_state');       // Coming from checkout form
        $order->shipping_city = $request->input('shipping_city');         // Coming from checkout form
        $order->shipping_address = $request->input('shipping_address');   // Coming from checkout form
        $order->shipping_phone = $request->input('shipping_phone');       // Coming from checkout form
        $order->shipping_zipcode = $request->input('shipping_zipcode');   // Coming from checkout form

    
        if(!$request->has('billing_fullname')) 
        {
            $order->billing_fullname = $request->input('shipping_fullname'); // Coming from checkout form
            $order->billing_state = $request->input('shipping_state');       // Coming from checkout form
            $order->billing_city = $request->input('shipping_city');         // Coming from checkout form
            $order->billing_address = $request->input('shipping_address');   // Coming from checkout form
            $order->billing_phone = $request->input('shipping_phone');       // Coming from checkout form
            $order->billing_zipcode = $request->input('shipping_zipcode');   // Coming from checkout form
        }
        else 
        {
            $order->billing_fullname = $request->input('billing_fullname');
            $order->billing_state = $request->input('billing_state');
            $order->billing_city = $request->input('billing_city');
            $order->billing_address = $request->input('billing_address');
            $order->billing_phone = $request->input('billing_phone');
            $order->billing_zipcode = $request->input('billing_zipcode');
        }

        $order->grand_total = \Cart::session(auth()->id())->getTotal(); // Coming from the cart session
        $order->item_count = \Cart::session(auth()->id())->getContent()->count();  
        // Coming from the cart session

        $order->user_id = auth()->id(); // Coming from the logged in user id

        $order->save(); // data save in orders table

        //Collect order items from the cart
        $cartItems = \Cart::session(auth()->id())->getContent();

         foreach($cartItems as $item) 
         {

            //Collect order items from the cart
            //$order coming from order table
            //items coming from $cartItems as well as cart table

            $order->items()->attach($item->id, ['price'=> $item->price, 'quantity'=> $item->quantity]); 
            
        }

        //payment
        
      //  if(request('payment_method') == 'paypal') {
                //redirect to paypal
           // return redirect()->route('paypal.checkout', $order->id);

      //  }

        if(request('payment_method') == 'ssl-commerz') {

          //  $tempid=$order->id;
            
           //$name=$request->input('shipping_fullname');

        //  $data = DB::select('select shipping_fullname from product_orders where ('id', $tempid)');
         //   $data = DB::table('product_orders')->where('id',$tempid)->get();
            $articles = ['Article 1','Article 2','Article 3'];
            return redirect()->route('example2',['articles' => $articles]);
           /*
            $data = array (
            'title'=>'My App yo',
            'Description'=>'This is New Application',
            'author'=>'foo'
             );
             */
           //redirect to SSL-PAY
           // return redirect()->route('example2');
           // return redirect('/example2', compact('name'));
           // return redirect()->route('example2', compact('data'));
          // return redirect('/example2',compact('name'));
           
            // return "SSL test";

        }


         //empty cart
         \Cart::session(auth()->id())->clear();

         //Sent email to customer

         //take user to thank you


        //  dd('order created' , $order);
        return "order completed, thank you for your order";

       //  return redirect()->route('home')->withMessage('Order has been placed');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductOrder  $productOrder
     * @return \Illuminate\Http\Response
     */
    public function show(ProductOrder $productOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductOrder  $productOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductOrder $productOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductOrder  $productOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductOrder $productOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductOrder  $productOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductOrder $productOrder)
    {
        //
    }
}
