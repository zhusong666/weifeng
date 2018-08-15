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
    protected $fillable = ['goods_name','cates_id','goods_price','goods_count','goods_selecnt','goods_time','goods_status','goods_content'];

    //与用户关联的属性
    public function goods_img()
    {
    	return $this->hasOne('App\Model\Admin\Goods_img','good_id');
    }

    public function details()
    {
        return $this->hasOne('App\Model\Admin\Details','goodss_id');
    }

    public function comments()
    {
        return $this->hasMany(\App\Model\Home\Comment:class,'goods_id','goods_id');
    }
}
