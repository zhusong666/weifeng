<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
     //与模型关联的数据表
    protected $table = 'wf_home_user';
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    public function comments()
    {
    	return $this->hasMany(\App\Model\Home\Comments::class,'user_id','user_id');
    }
}
