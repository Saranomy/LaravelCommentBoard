<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
	public function home() {
		return view('home', [
			'comments' => Comment::all()
		]);
	}

	public function post(Request $request) {
		$comment = new Comment();
		$comment->name = $request->name;
		$comment->content = $request->content;
		$comment->save();
		return redirect('/');
	}
}