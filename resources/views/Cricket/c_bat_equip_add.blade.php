@extends('layouts.app2')

@section('content')
	

		
<html>

		<h1>Cricket Batting Equipments</h1>

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
<head>
<style>
table {
 border-collapse: collapse;
 text-align: center;
}
td:first-child, th:first-child {
 border-left: none;
}
td:nth-child(2), th:nth-child(2) {
 border-left: solid 2px red;
}
</style>
</head>


		@if(@count($c_b_e)>0)
		<table rules="all" >
			<div class="well">

			<td >IMAGE</td><td>PRICE</td><td>NAME</td><td></td>
				@foreach($c_b_e as $cbe)

								

					
				<div class="row">
				<tr>
				
				

				<td><div class="col-md-4 col-sm-4"><img style="width:200%" src="{{$cbe->image}}"></div></td>
				
				<td>{{$cbe->price}}</td>
				<!-- <td>{{'   '}}</td>
				<td>{{'   '}}</td>
				<td>{{'   '}}</td> -->
				@php
				$product=str_replace("http://localhost/lar_sports/public/storage/images/","",$cbe->image);
        		$product=str_replace(".PNG","",$product);
        		$product=str_replace(str_split('_0123456789'),"",$product);
        		@endphp
				<td>{{$product}}</td>	

				@php
				$var=$cbe->id;
				session(['c_b_e_id' => $var]);
				$v=2;
				session(['cid' => $v]);
				@endphp

				<td>
				
				<a href="{{route('check_order',session('c_b_e_id'))}}" class="btn btn-default">Add</a>

				
				</td>
				<td>

				
					{{csrf_field()}}
				
				
			
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
	</html>	
@endsection