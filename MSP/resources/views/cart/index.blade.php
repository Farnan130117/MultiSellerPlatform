@extends('layouts.app')

@section('content')

<div class="container">
	<p>Your Cart</p>

<!-- not a good practice -->
<!--
{{-- // blade commenting
{{ dd (\Cart::session( auth()->id() )-> getcontent() ) }}

--}}
-->

<!-- Cart Table-->
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($cartItems as $item)
    <tr>
      <td scope="row">{{$item->name}}</td>
      <td>
        <!--	{{$item->price}} -->

        <!-- sum the price as the product quantity-->
      	{{Cart::session(auth()->id())->get($item->id)->getPriceSum()}} 
      	

      </td>
      <td>
      <form action="{{route('cart.update', $item->id)}}">
      	<input name="quantity" type="number" value={{$item->quantity}}>
      	<input type="submit" value="Save">
      </form>

      </td>
      <td><a href="{{route('cart.destroy',$item->id)}}">Delete</a></td>

    </tr>
    @endforeach
  </tbody>
</table>

<h2>
	Total Price: {{\Cart::session(auth()->id())->getTotal()}} BDT
</h2>

<a href="{{route('cart.checkout')}}" class="btn btn-primary" role="button"> Proceed Checkout</a>
 
</div>


@endsection