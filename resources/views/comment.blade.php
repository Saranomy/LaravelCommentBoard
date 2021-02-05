@extends('master')
@section('content')
	<h1>View Comment</h1>
	<b>{{ $comment->name }}</b>
	({{ $comment->updated_at->diffForHumans() }}) 
	<p><b>Created at:</b> {{ $comment->created_at }}</p>
	<p><b>Updated at:</b> {{ $comment->updated_at }}</p>
	<p>{{ $comment->content }}</p>
	<p>
		<a href="/">Back</a>
		<a href="/comment/{{ $comment->id }}/edit">Edit</a>
		<a href="/comment/{{ $comment->id }}/delete">Delete</a>
	</p>
@stop