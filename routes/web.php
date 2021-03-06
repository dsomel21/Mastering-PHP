<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['web']], function() {

	Route::get('/', function () {
		$people = ['Kanye West', 'Travis $cott', 'Max B'];
	    return view('welcome', compact('people'));
	    // or ['people', => people]); 
	    // or compact(people)
	    // or ->with('people', $people)
	    // or ->withPeople($people)
	});

	Route::get('/artists', 'ArtistsController@index');

	Route::get('/artists/{artist}', 'ArtistsController@show');

	Route::post('/artists/{artist}/albums', 'AlbumsController@store');

	Route::get('/albums/{album}/edit', 'AlbumsController@edit');

	Route::put('/albums/{album}', 'AlbumsController@update');

	Route::post('/artists', 'ArtistsController@store');

	Route::post('/artists/{artist}/comments', 'CommentController@store');

});
Auth::routes();

Route::get('/home', 'HomeController@index');
