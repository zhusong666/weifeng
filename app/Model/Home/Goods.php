<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
     //与模型关联的数据表
    protected $table = 'wf_goods';
    protected $primaryKey = 'goods_id';
    public $timestamps = false;

    //与用户关联的属性
    public function goodsimg()
    {
    	return $this->hasOne('App\Model\Home\Goodsimg','good_id','goods_id');
    }

    public function details()
    {
        return $this->hasOne('App\Model\Home\Details','goodss_id','goods_id');
    }

    public function goodsimgs()
    {
    	return $this->hasMany('App\Model\Home\Goodsimg','good_id');
    }
}
