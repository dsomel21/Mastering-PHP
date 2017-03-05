<?php

namespace App\Http\Controllers;


class PagesController extends Controller {
    
    public function home(){
    		return view('welcome');
    		// $people = ['Kanye West', 'Travis $cott', 'Max B'];
    	    // return view('welcome', compact('people'));
    	    // or ['people', => people]); 
    	    // or compact(people)
    	    // or ->with('people', $people)
    	    // or ->withPeople($people)
    }

    public function about(){
    	return view('pages.about');
    }


}
