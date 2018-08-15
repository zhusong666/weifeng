<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class User_details extends Model
{
    //与模型关联的数据表
    protected $table = 'home_user_details';
    protected $primaryKey = 'details_id';
    public $timestamps = false;

    //可被赋值的属性
	protected $fillable = ['users_id','username','deta_phone'];

    //关联user表
    public function user()
    {
    	return $this->hasOne('App\Model\Home\User','user_id');
    }



}
