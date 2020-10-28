<?php

namespace App\Mail;
//use App\Order;
use App\ProductOrder;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderPaid extends Mailable
{
    use Queueable, SerializesModels;
    public $product_order;
   // public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public function __construct(ProductOrder $product_order)
    {
        //
        $this->product_order=$product_order;
    }

    /*
    public function __construct(Order $order)
    {
        //
        $this->product_order=$order;
    }
    */

    /*
    public function __construct()
    {
        //
        
    }
    /*

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.order.paid');
    }
}
