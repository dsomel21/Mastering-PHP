<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Artist;

class CommentController extends Controller {

	public function store(Request $request, Artist $artist){
		
		$artist->comments()->create([
			'body'=>$request->body,
			'user_id'=>$request->user_id
		]);

		return back();
	}
}
