@extends('layouts.app')

@section('content')
<div class="container">
    <h2> Products</h2>
    <div class="row">

        @foreach($products as $product)
        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('default_product.png')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{{$product->name}}</h4>
                    <p class="card-text">{{$product->description}}</p>
                </div>
                 <div class="card-body">
                    <a href="#" class="card-link">Add to cart</a>
                   <!-- <a href="#" class="card-link">Another link</a> -->
            </div>
            
            </div>
        </div>
        @endforeach

    </div>
    
</div>
@endsection
