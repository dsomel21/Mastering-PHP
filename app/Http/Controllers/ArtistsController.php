<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistsController extends Controller {

	public function index(){
		$artists = \DB::table('artists')->get();
			return view('artists.index', compact('artists'));
	}
}
