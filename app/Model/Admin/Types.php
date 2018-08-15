<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
     /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'wf_goods_type';

    protected $primaryKey = 'type_id';

    public $timestamps = false;

    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = ['gid','type_name','tprice','colour'];

}
