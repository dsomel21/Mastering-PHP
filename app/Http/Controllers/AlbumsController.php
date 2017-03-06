<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Artist;

class AlbumsController extends Controller {
    
    public function store(Request $request, Artist $artist){
    	$album = new Album;
    	$album->album_name = $request->album_name;

    	$artist->albums()->save($album);

    	return back();

			// return 'tonka';
    	// return $request->all();
    }
}
