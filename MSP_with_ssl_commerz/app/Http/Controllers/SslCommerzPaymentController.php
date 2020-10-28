<?php

namespace App\Http\Controllers;

use App\ProductOrder;
use App\User;
use App\Order;
use App\Mail\OrderPaid;
use Auth;
//use DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Library\SslCommerz\SslCommerzNotification;

use Illuminate\Foundation\Auth\AuthenticatesUsers;


//use Illuminate\Http\RedirectResponse;
//use Illuminate\Routing\Redirector;


class SslCommerzPaymentController extends Controller
{

    public function exampleEasyCheckout()
    {
        return view('exampleEasycheckout');
    }

    public function exampleHostedCheckout()
    {
        return view('exampleHosted');
    }


    public function index(Request $request)
    {
       // dd($request->all());
        # Here you have to receive all the order data to initate the payment.
        # Let's say, your oder transaction informations are saving in a table called "orders"
        # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.
                        // customized validation by farnan
                        // validate form data
        $request->validate([
            'shipping_fullname' => 'required',
            'shipping_state' => 'required',
            'shipping_city' => 'required',
            'shipping_address' => 'required',
            'shipping_phone' => 'required',
            'shipping_zipcode' => 'required',
            'shipping_email' => 'required',
            'payment_method' => 'required',
        ]);
        
                            // Product Order Section Start//
        $order = new ProductOrder(); // create new productorder

        $order->product_order_number = uniqid('ProductOrderNumber-');  // Unique order number

        $order->shipping_fullname = $request->input('shipping_fullname'); // Coming from checkout form
        $order->shipping_state = $request->input('shipping_state');       // Coming from checkout form
        $order->shipping_city = $request->input('shipping_city');         // Coming from checkout form
        $order->shipping_address = $request->input('shipping_address');   // Coming from checkout form
        $order->shipping_phone = $request->input('shipping_phone');       // Coming from checkout form
        $order->shipping_zipcode = $request->input('shipping_zipcode');   // Coming from checkout form
        $order->payment_method = $request->input('payment_method');   // Coming from checkout form

    
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
                               // Product Order Section End//
        

        $post_data = array();
        $post_data['total_amount'] = \Cart::session(auth()->id())->getTotal(); // Coming from the cart session
        //'10'; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        //Important
       // $post_data['tran_id'] = uniqid(); // tran_id must be unique
        $post_data['tran_id'] = $order->product_order_number; 
        // using same product order id from product_order table

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $request->shipping_fullname ?? ''; //'Customer Name';
        $post_data['cus_email'] = $request->shipping_email ?? '';//'customer@mail.com';
        $post_data['cus_add1'] = $request->shipping_address ?? '';//'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = $request->shipping_city ?? '';//"";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = $request->shipping_state ?? '';//"Bangladesh";
        $post_data['cus_phone'] = $request->shipping_phone ?? '';//'8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";


         if ( request('payment_method') == 'cash_on_delivery') 
         {
             # code...
            #Before  going to initiate the payment order status need to insert or update as Pending.
            $update_product = DB::table('orders')
                ->where('transaction_id', $post_data['tran_id'])
                ->updateOrInsert([
                    'name' => $post_data['cus_name'],
                    'email' => $post_data['cus_email'],
                    'phone' => $post_data['cus_phone'],
                    'amount' => $post_data['total_amount'],
                    'status' => 'COD_Pending', // Cash of delivery related pending amount status
                    'address' => $post_data['cus_add1'],
                    'transaction_id' => $post_data['tran_id'],
                    'currency' => $post_data['currency']
                ]);

            //empty cart
            \Cart::session(auth()->id())->clear();

           // echo "Cash On delivery order is successfully Completed";

           //  return view('/home');
           //return redirect('/success'); 
          //  return redirect()->route('home');
         //  return redirect('home')->with('status', 'Order Completed, Shop Now!');
            return redirect('home')->with('status', 'Order Completed, Shop Now!');
           //  return redirect()->action('SslCommerzPaymentController@COD_feedback');
            /*
            echo
                "<div>
                    <h3>
                    <a href="{{route('home')}}>First</a>

                    </h3>
                   <div>Lorem ipsum dolor sit amet.</div>
                 </div>
                ";
                */
            

         }



        if( request('payment_method') == 'ssl_commerz') 
        {

            #Before  going to initiate the payment order status need to insert or update as Pending.
            $update_product = DB::table('orders')
                ->where('transaction_id', $post_data['tran_id'])
                ->updateOrInsert([
                    'name' => $post_data['cus_name'],
                    'email' => $post_data['cus_email'],
                    'phone' => $post_data['cus_phone'],
                    'amount' => $post_data['total_amount'],
                    'status' => 'Pending',
                    'address' => $post_data['cus_add1'],
                    'transaction_id' => $post_data['tran_id'],
                    'currency' => $post_data['currency']
                ]);

            $sslc = new SslCommerzNotification();
            # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
            $payment_options = $sslc->makePayment($post_data, 'hosted');

            if (!is_array($payment_options)) {
                print_r($payment_options);
                $payment_options = array();
            }

       }


    }

    public function payViaAjax(Request $request)
    {
       
        # Here you have to receive all the order data to initate the payment.
        # Lets your oder trnsaction informations are saving in a table called "orders"
        # In orders table order uniq identity is "transaction_id","status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

        $post_data = array();
        $post_data['total_amount'] = '10'; # You cant not pay less than 10
        $post_data['currency'] = "BDT";

        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = 'Customer Name';
        $post_data['cus_email'] = 'customer@mail.com';
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";


        #Before  going to initiate the payment order status need to update as Pending.
        $update_product = DB::table('orders')
            ->where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'name' => $post_data['cus_name'],
                'email' => $post_data['cus_email'],
                'phone' => $post_data['cus_phone'],
                'amount' => $post_data['total_amount'],
                'status' => 'Pending',
                'address' => $post_data['cus_add1'],
                'transaction_id' => $post_data['tran_id'],
                'currency' => $post_data['currency']
            ]);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'checkout', 'json');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

    public function success(Request $request)
    {
        //dd($request->all());
       // echo "Transaction is Successful";

        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');

        $sslc = new SslCommerzNotification();

        #Check order status in order tabel against the transaction id or order id.
        $order_detials = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_detials->status == 'Pending') {
            $validation = $sslc->orderValidate($tran_id, $amount, $currency, $request->all());

            if ($validation == TRUE) {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel. Here you need to update order status
                in order table as Processing or Complete.
                Here you can also sent sms or email for successfull transaction to customer
                */
                $update_product = DB::table('orders')
                    ->where('transaction_id', $tran_id)
                    ->update(['status' => 'Processing']);

            //farnan
               $userID = ProductOrder::select ('user_id')-> where('product_order_number',$tran_id)->get();
            // return Auth::loginUsingId($userID);

              // dd($userID);

              //  echo "<br >Transaction is successfully Completed";
              // $userEmail = User::select ('email')->where('id',$userID)->get();
              //  dd($userEmail);

              // $user = User::where('id',$userID)->get();
              // $user = User::find($userID);
             //  $user = User::find($userID, ['id', 'email']);
               $user = User::find($userID, ['email']);
                
            //dd($user);
               /*
              
               $product_order = DB::table('product_orders')
                    ->where('product_order_number', $tran_id)
                    ->get();
               */
                    /* Sent mail with ProductOrder model*/
               $product_order = ProductOrder::where('product_order_number',$tran_id)->first();
             //  dd($product_order);
               Mail::to($user)->send(new OrderPaid($product_order));

                     /* Sent mail with Order model*/
            //  $order = Order::where('transaction_id',$tran_id)->first();
            //  Mail::to($user)->send(new OrderPaid($order));

              // Mail::to($user)->send(new OrderPaid($product_order));
                
               /*
               if($user){
                Auth::login($user); // login user automatically
                return redirect('home');
                        }
                */
               // Auth::loginUsingId($user);
               // Auth::login($user);
               // dd($user);
            return redirect('home')->with('status', 'Transaction Completed, Shop Now!');
                
              
            } else {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel and Transation validation failed.
                Here you need to update order status as Failed in order table.
                */
                $update_product = DB::table('orders')
                    ->where('transaction_id', $tran_id)
                    ->update(['status' => 'Failed']);
                echo "validation Fail";
            }
        } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
            /*
             That means through IPN Order status already updated. Now you can just show the customer that transaction is completed. No need to udate database.
             */
            //echo "Transaction is successfully Completed";
            return redirect('home')->with('status', 'Transaction Completed, Shop Now!');
        } else {
            #That means something wrong happened. You can redirect customer to your product page.
            echo "Invalid Transaction";
        }


    }

    public function fail(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_detials = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_detials->status == 'Pending') {
            $update_product = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->update(['status' => 'Failed']);
            echo "Transaction is Falied";
        } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
            echo "Transaction is already Successful";
        } else {
            echo "Transaction is Invalid";
        }

    }

    public function cancel(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_detials = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_detials->status == 'Pending') {
            $update_product = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->update(['status' => 'Canceled']);
            echo "Transaction is Cancel";
        } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
            echo "Transaction is already Successful";
        } else {
            echo "Transaction is Invalid";
        }


    }

    public function ipn(Request $request)
    {
        #Received all the payement information from the gateway
        if ($request->input('tran_id')) #Check transation id is posted or not.
        {

            $tran_id = $request->input('tran_id');

            #Check order status in order tabel against the transaction id or order id.
            $order_details = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->select('transaction_id', 'status', 'currency', 'amount')->first();

            if ($order_details->status == 'Pending') {
                $sslc = new SslCommerzNotification();
                $validation = $sslc->orderValidate($tran_id, $order_details->amount, $order_details->currency, $request->all());
                if ($validation == TRUE) {
                    /*
                    That means IPN worked. Here you need to update order status
                    in order table as Processing or Complete.
                    Here you can also sent sms or email for successful transaction to customer
                    */
                    $update_product = DB::table('orders')
                        ->where('transaction_id', $tran_id)
                        ->update(['status' => 'Processing']);

                    echo "Transaction is successfully Completed";
                } else {
                    /*
                    That means IPN worked, but Transation validation failed.
                    Here you need to update order status as Failed in order table.
                    */
                    $update_product = DB::table('orders')
                        ->where('transaction_id', $tran_id)
                        ->update(['status' => 'Failed']);

                    echo "validation Fail";
                }

            } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {

                #That means Order status already updated. No need to udate database.

                echo "Transaction is already successfully Completed";
            } else {
                #That means something wrong happened. You can redirect customer to your product page.

                echo "Invalid Transaction";
            }
        } else {
            echo "Invalid Data";
        }
    }
     /*
    // redirect for COD feedback - Unfinished
    public function COD_feedback(Request $request)
    {
       // dd($request->all());
       // echo "Transaction is Successful";
        return view('cod_success');
    }
    */
    

}
