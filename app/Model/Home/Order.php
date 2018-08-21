<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'wf_shop_orders';//表名称

    protected $primarykey = 'ooid';//主键ID

    public $timestamps = false;//时间戳(不要)

    /**
     * 可以被批量赋值的属性。(必写不然传不进去)
     *
     * @var array
     */


    public function details()
    {
        return $this->hasMany('App\Model\Home\Details','orderss_id','order_id');
    }


   /* public function user()
    {
        return $this->hasOne('App\Model\Home\User','user_id','');
    }

    public function goods()
    {
        return $this->hasOne('App\Model\Home\Goods','goods_id');
    }*/
}
