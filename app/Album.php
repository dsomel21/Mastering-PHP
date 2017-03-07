<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

		protected $fillable = ['album_name'];

    public function artist(){
    	return $this->belongsTo(Artist::class);
    }

    public function comments(){
    	return $this->hasMany(Comment::class);
    }

    public function path(){
    	return '/albums/' . $this->id;
    }
}
