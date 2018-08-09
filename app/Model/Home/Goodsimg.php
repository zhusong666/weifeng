<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Goodsimg extends Model
{
     //与模型关联的数据表
    protected $table = 'wf_goods_img';
    protected $primaryKey = 'good_id';
    public $timestamps = false;

   
}
