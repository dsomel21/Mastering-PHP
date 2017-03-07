<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function artist(){
    	return $this->belongsTo(Artist::class);
    }
}
