<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo(\App\Model\Home\User::class,'user_id','user_id');
    }

    public function replys()
    {
    	return $this->hasMany(\App\Model\Home\Reply::class,'comment_id','id');
    }

}
