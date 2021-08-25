@extends('layouts.app2')

@section('content')
		<a href="{{route('sall')}}" name="see_users" class="btn btn-default">Go Back</a>
		<!--<a href="posts/create" class="btn btn-default">Go Back</a>-->
		<table>

		<tr>{{$admins->id}}</tr>
		<tr>
			{{$admins->username}}
		</tr>
		<tr>
			{{$admins->password}}
		</tr>
		<tr>
		<small>Written on {{$admins->created_at}} </small>
		</tr>
	</table>
		<a href="" class="btn btn-default">Edit</a>

		<a href=""  class="pull-right">Delete</a>
@endsection