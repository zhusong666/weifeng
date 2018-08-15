<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Goodsimg extends Model
{
     //与模型关联的数据表
    protected $table = 'wf_goods_img';
    protected $primaryKey = 'goodsimg_id';
    public $timestamps = false;

    public function details()
    {
        return $this->hasOne('App\Model\Home\Details','goodss_id','good_id');
    }

    public function goods()
    {
        return $this->hasOne('App\Model\Home\Goods','goods_id','good_id');
    }

   
}
