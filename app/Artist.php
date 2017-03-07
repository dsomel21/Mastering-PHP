<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model {

	public function albums(){
		return $this->hasMany(Album::class);
	}

	// public function addAlbum(Album $album){
	// 	return $this->albums()->save($album);
	// }

	public function comments(){
		return $this->hasMany(Comment::class);
	}

}
