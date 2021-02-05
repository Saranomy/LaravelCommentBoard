<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
	public function home() {
		return view('home', [
			'comments' => Comment::orderBy('created_at', 'DESC')->get()
		]);
	}

	public function post(Request $request) {
		$comment = new Comment();
		$comment->name = $request->name;
		$comment->content = $request->content;
		$comment->save();
		return redirect('/');
	}

	public function view($id) {
		$comment = Comment::findOrFail($id);
		return view('comment', [
			'comment' => $comment
		]);
	}

	public function edit($id) {
		$comment = Comment::findOrFail($id);
		return view('edit', [
			'comment' => $comment
		]);
	}

	public function update(Request $request, $id) {
		Comment::where('id', $id)
			->update([
				'name' => $request->name,
				'content' => $request->content
			]);
		return redirect('/comment/' . $request->id);
	}

	public function delete($id) {
		Comment::destroy($id);
		return redirect('/');
	}
}