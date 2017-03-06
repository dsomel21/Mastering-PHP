<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumsController extends Controller {
    
    public function store(Request $request){
			// return 'tonka';
    	return $request->all();
    }
}
