<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

		protected $fillable = ['body'];

    public function artist(){
    	return $this->belongsTo(Artist::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }

    // public function by(User $user){
    // 	$this->user_id = $user->id;
    // }
}
