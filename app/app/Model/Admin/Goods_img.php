<?php

namespace App\app\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Goods_img extends Model
{
    //与模型关联的数据表
    protected $table = 'goods_img';
    protected $primaryKey = 'goodsimg_id';
    public $timestamps = false;

    //可以被复制的属性
    protected $fillable = ['good_id','goods_img'];
}
