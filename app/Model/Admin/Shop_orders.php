<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Shop_orders extends Model
{
    //与模型关联的数据表
    protected $table = 'wf_shop_orders';
    protected $primaryKey = 'order_id';
    public $timestamps = false;
    
}
