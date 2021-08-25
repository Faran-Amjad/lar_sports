@extends('layouts.app2')

@section('content')
	

		


		<h1>Athletics Activity Trackers</h1>

		<!-- <form action="{{route('b_cloth_store')}}" method="post"  enctype="multipart/form-data" >
    <br>
    <br>
    {{csrf_field()}}
    <input type="file" name="image"/>
    <br><br>
    <input type="number" name="price" placeholder="price" />
    <br><br>
    <input type="submit" name="sumit" value="Upload"/>
</form> -->
		@if(@count($a_t)>0)
		<table rules="all">
			<div class="well">
				<td >IMAGE</td><td>PRICE</td><td>NAME</td><td></td>
				@foreach($a_t as $at)

								

					
				<div class="row">
				<tr>
				
				

				<td><div class="col-md-4 col-sm-4"><img style="width:200%" src="{{$at->image}}"></div></td>
				
				<td>{{$at->price}}</td>
				@php
				$product=str_replace("http://localhost/lar_sports/public/storage/images/","",$at->image);
        		$product=str_replace(".PNG","",$product);
        		$product=str_replace(str_split('_0123456789'),"",$product);
        		@endphp
				<td>{{$product}}</td>
					

				@php
				$var=$at->id;
				session(['a_t_id' => $var]);
				$v=1;
				session(['cid' => $v]);
				@endphp

				<td>
				
				<a href="{{route('check_order',session('a_t_id'))}}" class="btn btn-default">Add</a>

				
				</td>
				<td>

				<!-- <form action="{{route('b_cloth_delete',$at->id)}}" method="post"> -->
					{{csrf_field()}}
				<!--  <a href="{{route('b_cloth_delete',$at->id)}}"  class="pull-right">Delete</a>-->

				<!-- <input type="submit" name="btn" value="Delete"> -->
				
			
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