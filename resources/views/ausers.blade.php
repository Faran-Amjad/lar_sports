@extends('layouts.app2')

@section('content')
		<h1>Admins</h1>
		@if(@count($admins)>0)
		<table>
			<div class="well">
				<tr><th>#</th><th>Username</th><th>Password</th><th>Created_at</th></tr>
				@foreach($admins as $admin)
					
						<tr>

						<td><a href="show/{{$admin->id}}">{{$admin->id}}</a></td>
						
						
						<td>
							{{$admin->username}}
						</td>
						
						<td>
							
							{{$admin->password}}
						</td>
					
					<td>
						
					{{$admin->created_at}} 
				</td>
				<td>
				<a href="{{route('aedit',$admin->id)}}" class="btn btn-default">Edit</a></td>
				<td>
		<a href="{{route('adelete',$admin)}}"  class="pull-right">Delete</a>
				</td>
			</tr>
				@endforeach

			</div>
			</table>
				
		@else
			<p>No Posts found</p>

		@endif
		<hr>
		<a href="{{route('home')}}">home</a>
@endsection