@extends('master')
@section('content')
	<h1>Edit Your Comment</h1>
	<form method="post" action="/comment/{{ $comment->id }}/update">
		{{ csrf_field() }}
		<input type="text" name="name" placeholder="name" value="{{ $comment->name }}">
		<input type="text" name="content" placeholder="comment" value="{{ $comment->content }}">
		<input type="submit" value="Post">
	</form>
	<p><a href="/comment/{{ $comment->id }}">Back</a></p>
@stop