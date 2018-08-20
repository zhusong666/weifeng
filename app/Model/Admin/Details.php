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
    public function goods()
    {
        return $this->hasMany('App\Model\Admin\Goods','goods_id');
    }

    public function goodsimg()
    {
        return $this->hasOne('App\Model\Admin\Goods_img','good_id','goodss_id');
    }


    public function shop_orders()
    {
        return $this->hasOne('App\Model\Admin\Shop_orders','order_id');
    }

    public function carts()
    {
        return $this->hasOne('App\Model\Admin\Carts','gid','goodss_id');
    }
}
