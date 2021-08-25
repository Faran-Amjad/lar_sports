@extends('layouts.app2')

@section('content')
	

		


		<h1>Boxing Clothes</h1>

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
		@if(@count($box_cloth)>0)
		<table rules="all">
			<div class="well">
				<td >IMAGE</td><td>PRICE</td><td>NAME</td><td></td>
				@foreach($box_cloth as $b_cloth)

								

				<!-- @php
				$var="box_clothes/storage/images/{{$b_cloth->image}}";	
				$var1= str_replace("box_clothes", "", $var);
				@endphp	 -->	
				<div class="row">
				<tr>
				
				

				<td><div class="col-md-4 col-sm-4"><img style="width:200%" src="{{$b_cloth->image}}"></div></td>
				
				<td>{{$b_cloth->price}}</td>
				@php
				$product=str_replace("http://localhost/projects/lar_sports/storage/app/public/images/","",$b_cloth->image);
        		$product=str_replace(".PNG","",$product);
        		$product=str_replace(str_split('_0123456789'),"",$product);
        		@endphp
				<td></td>
					

				@php
				$var=$b_cloth->id;
				session(['bid' => $var]);
				$v=0;
				session(['cid' => $v]);
				@endphp

				<td>
				
				<a href="{{route('check_order',session('bid'))}}" class="btn btn-default">Add</a>

				
				</td>
				<td>

				<!-- <form action="{{route('b_cloth_delete',$b_cloth->id)}}" method="post"> -->
					{{csrf_field()}}
				<!--  <a href="{{route('b_cloth_delete',$b_cloth->id)}}"  class="pull-right">Delete</a>-->

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