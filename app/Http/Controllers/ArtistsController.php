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
		// $artist = Artist::find($id);
		return view('artists.show', compact('artist'));
	}

	public function store(Request $request, Artist $artist){
	
		
	
  	$artist->create([
  		'name' => $request->name
		]);

		return back();
	}
}