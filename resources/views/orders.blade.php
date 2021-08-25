@extends('layouts.app2')

@section('content')

<h2>Your Order is Placed Successfully</h2>
<hr>

<a href="{{route('orders')}}">Your Cart</a>
<hr>
		<a href="{{route('home')}}">home</a>

@endsection