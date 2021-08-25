@extends('layouts.app2')

@section('content')
		<h1>Orders</h1>
		
		@if(@count($oid)>0)
		
		<table rules="all" align="center">
			<div class="well">
				<tr align="center">
					<th>#</th><th>User_id</th><th>Quantity</th><th>Product</th>
					<th>Price</th><th>Size</th>
					<!-- <td>#</td><td>User_id</td><td>Quantity</td><td>Product</td>
					<td>Price</td><td>Size</td> -->
				</tr>
				
				@php
				$t=0;
				@endphp
				@foreach($oid as $o)
				@php
				$t=$t+(($o->price)*($o->quantity));
				
				@endphp
					
						<tr align="center">

				<td>{{$o->id}}</td>
				
				<td>{{$o->user_id}}</td>
				
				<td>{{$o->quantity}}</td>
				<td>{{$o->product}}</td>
				<td>{{$o->price}}</td>
				<td>{{$o->size}}</td>
				<td>
				<a href="" class="btn btn-default">Edit</a></td>
				<td>
		<a href="{{route('order_del',$o)}}"  class="pull-right">Delete</a>
				</td>
			</tr>

				
				@endforeach

@php			
				
				$di=$d;
				if($di==0)
				$disc=0;
				elseif($di==10)
				$disc=$t*(10/100);
				elseif($di==20)
				$disc=$t*(20/100);
				elseif($di==30)
				$disc=$t*(30/100);

				$total=$t-$disc;
				
@endphp


				<tr><td></td><td></td><td></td><td></td><th>Total</th></tr>
				<tr><td></td><td></td><td></td><td></td><td> {{$t}} </td></tr>
				<tr align="right"><td></td><td></td><td><th>Discount</th></td><td> {{$disc}} </td></tr>
				<tr align="right"><td></td><td></td><td><th>Discounted Total</th></td><td> {{$total}} </td></tr>
			</div>
			</table>
			
			<form action="{{route('check_coupon')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
				<label>Discount Coupon</label>
				{{csrf_field()}}
        <input type="text" name="cpn" value placeholder="Enter Your Coupon" id="cpn_value" class="form-control">

        <input type="submit" name="dc_input" value="Submit" class="btn btn-primary button">
			</form>
		@else
			<p>No Orders found</p>

		@endif
		<hr>
		
		<a href="{{route('home')}}">home</a>

@endsection