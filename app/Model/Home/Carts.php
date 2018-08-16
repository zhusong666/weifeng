<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
     /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'wf_goods_carts';

    protected $primaryKey = 'cate_id';

    public $timestamps = false;

    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = ['uid','gid','tname','colour','price','num'];
}
