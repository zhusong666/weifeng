<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
	protected $guarded = [];
	protected $table = 'relays';
    public function comment()
    {
    	return $this->belongsTo(\App\Model\Home\Comment::class,'comment_id','id');
    }

    public function user()
    {
    	return $this->belongsTo(\App\Model\Home\User::class,'user_id','user_id');
    }
}
