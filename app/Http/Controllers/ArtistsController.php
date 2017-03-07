<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;

class ArtistsController extends Controller {

	public function index() {
		$artists = Artist::all();
			return view('artists.index', compact('artists'));
	}

	public function show(Artist $artist){

		/*	When you do this it is doing another database query behind the scenes...	*/ 
		//return $artist->comments;

		/*	Eagerloading will run another query => the n+1 problem... where in a for each statement you are triggering dozens and dozens of queries... 	*/
		/*	Solution is to eagerload any records ahead of time...	*/
		// return $artist->comments[0]->user;

		/* This returns an array */
		// $artist = Artist::all();

		// $artist = Artist::with('comments')->get()->find(1);

		/*	n + 1 issue  */
		// return $artist->comments[0]->user; 

		/* Solution... */
		// $artist = Artist::with('comments.user')->get()->find(1);

		/* Same thing as above. */
		$artist->load('comments.user');

		// return $artist;


		return view('artists.show', compact('artist'));
	}

	public function store(Request $request, Artist $artist){

  	$artist->create([
  		'name' => $request->name
		]);

		return back();
	}
}