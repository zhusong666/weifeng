<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'wf_orders_details';//表名称

    protected $primarykey = 'details_id';//主键ID

    public $timestamps = false;//时间戳(不要)

    /**
     * 可以被批量赋值的属性。(必写不然传不进去)
     *
     * @var array
     */
    protected $fillable = ['details_price','details_cnt'];

    public function goodss()
    {
        return $this->hasOne('App\Model\Admin\Goods','goods_id','goods_id');

    }

    public function goods_imgs()
    {
        return $this->hasMany('App\Model\Admin\Goods_img','goodsimg_id','goods_id');

    }
}
