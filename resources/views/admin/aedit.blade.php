@extends('layouts.app2')

@section('content')
		<h1> Edit Admin</h1>
		<form action="{{route('aupdate',$admin->id)}}" method="post">
			{{ csrf_field() }}
			<label>Title</label>
			<input type="text" name="username" value="{{$admin->username}}">
			
			<hr>
			<label>Blog</label>
			
			<input type="text" name="pass" value="{{$admin->password}}">
			<hr>
			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			</form>
@endsection