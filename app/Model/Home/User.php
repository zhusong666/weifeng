<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //与模型关联的数据表
    protected $table = 'wf_home_user';
    protected $primaryKey = 'user_id';
    public $timestamps = false;


    public function order()
    {
    	return $this->hasMany('App\Model\Home\Order','user_id');
    }


    public function comments()
    {
    	return $this->hasMany(\App\Model\Home\Comments::class,'user_id','user_id');
    }

    public function goods_details()
    {
        //关联用户下的商品--远程一对多
        return $this->hasManyThrough('App\Model\Home\Details','App\Model\Home\Order','uid','orderss_id','user_id','order_id');
    }
}
