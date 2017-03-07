<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function artist(){
    	return $this->belongsTo(Artist::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
