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

    public function goods()
    {
        return $this->hasOne('');

    }

    public function goods_img()
    {
        return $this->hasMany('');

    }
}
