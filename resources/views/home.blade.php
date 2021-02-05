@extends('master')
@section('content')
	<h1>Comment Board</h1>
	<form method="post" action="/post">
		{{ csrf_field() }}
		<input type="text" name="name" placeholder="name">
		<input type="text" name="content" placeholder="comment">
		<input type="submit" value="Post">
	</form>

	<ul>
		@foreach($comments as $comment)
			<li>
				<b>{{ $comment->name }}</b> 
				@if($comment->created_at != $comment->updated_at)
					(edited) 
				@endif
				({{ $comment->created_at->diffForHumans() }})
				<a href="/comment/{{ $comment->id }}">View</a>
				<br>
				{{ $comment->content }}
			</li>
		@endforeach
	</ul>
@stop