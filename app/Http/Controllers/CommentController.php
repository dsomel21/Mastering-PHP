<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Artist;

class CommentController extends Controller {

	public function store(Request $request, Artist $artist){

		$this->validate($request, [
			'body' => 'required|min:10'
		]);

		$comment = new Comment;
		$comment->body = $request->body;
		$comment->user_id = 1;

		$artist->comments()->save($comment);

		// $artist->comments()->create([
		// 	'body'=>$request->body
		// ]);

		return back();
	}
}
