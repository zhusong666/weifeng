<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    public function user()
    {
    	return $this->belongsTo(\App\Model\Home\User::class,'user_id','user_id');
    }
}
