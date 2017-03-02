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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/satnam', function(){
	return 'Satnam';
	// resources/views/about.blade.php
	// OR
	// resources/views/pages/about.blade.php
});

Route::get('/about', function(){
	return view('pages.about');
});
