@extends('layouts.app')

@section('content')

<h2>Your Order completed succesfully</h2>

 <!-- <button type="submit" href="{{route('Success')}}" class="btn btn-primary mt-3">Shop Again</button> -->

 <a href="{{route('home')}}">Shop Again</a>

@endsection