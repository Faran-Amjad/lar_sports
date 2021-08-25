@extends('layouts.app2')

@section('content')
	

		

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
		<!-- @if(@count($box_cloth)>0)
		<table>
			<div class="well">
				@foreach($box_cloth as $b_cloth)

								

				@php
				$var="box_clothes/storage/images/{{$b_cloth->image}}";	
				$var1= str_replace("box_clothes", "", $var);
				@endphp		
				<div class="row">
				<tr>
				
				

				<td><div class="col-md-4 col-sm-4"><img style="width:200%" src="{{$b_cloth->image}}"></div></td>
				
				<td>{{$b_cloth->price}}</td>
					
				<td>
				<a href="{{route('create_order',$b_cloth->id)}}" class="btn btn-default">Add</a>
				</td>
				<td>
{{csrf_field()}}
				
				
			</form>
		</td>
			</tr>
			</div>
				@endforeach

			</div>
			</table>
				
		@else
			<p>No Images found</p>

		@endif -->

<!doctype html>
<html lang="en">


<head>
	<title>
	Boxing Clothes Check
</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<style>
#increase
{
  position: absolute;
  top:70px;
  left:110px;
}
#decrease
{
  position: absolute;
  top:70px;
  left:10px;
}
#number
{
  position: absolute;
  top:70px;
  left:25px;
}
.box-content
{
  position: absolute;
  top:150px;
}
#s
{
  position: absolute;
  top:300px;
  left:5px;
}
#size
{
  position: absolute;
  top:105px;
}
#contain
{
  position: absolute;
  left:550px;
}
#si
{
  position: absolute;
  top:150px;
}
.image
{
  position: absolute;
  top:600px;
  left:200px;
}
#header
{
  position: relative;
  left:0px;
  top:0px;
}
#line
{
  position: absolute;
  top:900px;
  left:0px;
  width:1400px;
}
#footer
{
  position: relative;
  top:400px;
}
</style>
<body>
<div id="contain">
	<!--  --><hr>
	<h3>please enter quantity</h3>
<!-- array('TankController@update', $cid, session('cid')) -->
<form method="post" action="{{ url('orders/create/' . $cid . '/' . session('cid') )}}" enctype="multipart/form-data">
{{csrf_field()}}
  <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"><h4>-</h4></div>

  <input type="number" id="number" name="num" value="1" style="width: 80px; text-align:center; " />
  <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"><h4>+</h4></div>


<div id="size"><h3>Please Select Size</h3></div>

<div id="si">
    <label>Size</label>
        <select name="size" id="input-size" class="form-control">
          <option value="n/a">Not Avalible</option>
          <option value="small">Small</option>
          <option value="medium">Medium</option>
          <option value="large">Large</option>
          <option value="x-large">X-Large</option>
        </select>
      </div>
    

  <div id="s"><input type="submit" value="submit" name="s_order"></div>
  <!-- <button  type="submit" name="a_signin" value="submit" class="btn btn-lg btn-primary btn-block">Sign In</button> -->
</form>

</div>



</body>

		<hr>
		
	</html>
@endsection