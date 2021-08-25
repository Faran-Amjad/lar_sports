@extends('layouts.app2')

@section('content')
	

		<h1>Cricket Batting Equipments
		</h1>

		<form action="{{route('c_bat_quip_store')}}" method="post"  enctype="multipart/form-data" >
    <br>
    <br>
    {{csrf_field()}}
    <input type="file" name="image"/>
    <br><br>
    <input type="number" name="price" placeholder="price" />
    <br><br>
    <input type="submit" name="sumit" value="Upload"/>
</form>
		@if(@count($c_b_e)>0)
		<table rules="all">
			<div class="well">
				<td >IMAGE</td><td>PRICE</td><td>NAME</td>
				@foreach($c_b_e as $cbe)

								

					
				<div class="row">
				<tr>
				
				

				<td><div class="col-md-4 col-sm-4"><img style="width:200%" src="{{$cbe->image}}"></div></td>
				<td>{{$cbe->price}}</td>
				@php
				$product=str_replace("http://localhost/lar_sports/public/storage/images/","",$cbe->image);
        		$product=str_replace(".PNG","",$product);
        		$product=str_replace(str_split('_0123456789'),"",$product);
        		@endphp
				<td>{{$product}}</td>
					
				<td>
				<a href="" class="btn btn-default">Edit</a>
				</td>
				<td>

				<form action="{{route('c_bat_quip_delete',$cbe->id)}}" method="post">
					{{csrf_field()}}
				

				<input type="submit" name="btn" value="Delete">
				
			</form>
		</td>
			</tr>
			</div>
				@endforeach

			</div>
			</table>
				
		@else
			<p>No Images found</p>

		@endif
		<hr>
		<a href="{{route('home')}}">home</a>
		
@endsection