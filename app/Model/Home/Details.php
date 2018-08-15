<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    //与模型关联的数据表
    protected $table = 'wf_orders_details';
    protected $primaryKey = 'details_id';
    public $timestamps = false;

    public function goods()
    {
        return $this->hasOne('App\Model\Home\Goods','goods_id','goodss_id');
    }

    public function order()
    {
    	return $this->hasOne('App\Model\Home\Order','order_id','orderss_id');
    }

    public function goodsimg()
    {
    	return $this->hasOne('App\Model\Home\Goodsimg','good_id','goodss_id');
    }

   


}
