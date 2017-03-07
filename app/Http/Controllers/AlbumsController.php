<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Artist;

class AlbumsController extends Controller {

  public function store(Request $request, Artist $artist){

    return $artist;

    /* One Way...*/
  	// $album = new Album;
  	// $album->album_name = $request->album_name;

    /* Another One... */
  	// $album = new Album;a Album(['album_name' => $request->album_name]);
  	// $artist->albums()->save($album);

    /* Another One... */
    $artist->albums()->create([
      'album_name' => $request->album_name
    ]);

    /* Not Working... */
		// $artist->addAlbum(
		// 	new Album($request->album_name)
		// );
    return back();
  }

  /*    Getting the form    */
  public function edit(Album $album){
    return view('album.edit', compact('album'));
  }

  public function update(Request $request, Album $album){

    $album->update($request->all());
    return back();
  }
}
