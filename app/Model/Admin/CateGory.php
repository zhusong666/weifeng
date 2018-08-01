<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class CateGory extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'wf_category';//表名称

    protected $primarykey = 'id';//主键ID

    protected $timestamps = false;//时间戳(不要)

    /**
     * 可以被批量赋值的属性。(必写不然传不进去)
     *
     * @var array
     */
    protected $fillable = ['cate_name','cate_id','cate_path','cate_status'];
}
