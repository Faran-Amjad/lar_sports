@extends('layouts.app2')

@section('content')
		<h1>Users</h1>
		@if(@count($users)>0)
		<table>
			<div class="well">
				<tr><th>#</th><th>Username</th><th>Password</th><th>Created_at</th></tr>
				@foreach($users as $user)
					
						<tr>

						<td><a href="">{{$user->id}}</a></td>
						
						
						<td>
							{{$user->fname}}  {{$user->lname}}
						</td>
						
						<td>
							
							{{$user->pword}}
						</td>
					
					<td>
						
					{{$user->created_at}} 
				</td>
				<td>
				<a href="" class="btn btn-default">Edit</a>
			</td>
				<td>
		<a href=""  class="pull-right">Delete</a>
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