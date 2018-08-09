<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'wf_goods';

    protected $primaryKey = 'goods_id';

    public $timestamps = false;

    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = ['goods_name','type_id','goods_price','goods_count','goods_selecnt','goods_time','goods_status'];

    //与用户关联的属性
    public function goods_img()
    {
    	return $this->hasOne('App\Model\Admin\Goods_img','good_id');
    }
}
