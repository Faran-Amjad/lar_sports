@extends('layouts.app2')

@section('content')
	

		


		<h1>Swimming Boy's Swimwear</h1>

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
		@if(@count($s_b_s)>0)
		<table rules="all">
			<div class="well">
				<td >IMAGE</td><td>PRICE</td><td>NAME</td><td></td>
				@foreach($s_b_s as $sbs)

								

					
				<div class="row">
				<tr>
				
				

				<td><div class="col-md-4 col-sm-4"><img style="width:200%" src="{{$sbs->image}}"></div></td>
				
				<td>{{$sbs->price}}</td>
				@php
				$product=str_replace("http://localhost/lar_sports/public/storage/images/","",$sbs->image);
        		$product=str_replace(".PNG","",$product);
        		$product=str_replace(str_split('_0123456789'),"",$product);
        		@endphp
				<td>{{$product}}</td>
					

				@php
				$var=$sbs->id;
				session(['s_b_s_id' => $var]);
				$v=3;
				session(['cid' => $v]);
				@endphp

				<td>
				
				<a href="{{route('check_order',session('s_b_s_id'))}}" class="btn btn-default">Add</a>

				
				</td>
				<td>

				
					{{csrf_field()}}
				

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