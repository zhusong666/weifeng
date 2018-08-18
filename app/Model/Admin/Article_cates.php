<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Article_cates extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'wf_articlecates';//表名称
    protected $primaryKey = 'articlecate_id';//主键id
    public $timestamps = false;//时间戳(不要)

    /**
     * 可以被批量赋值的属性。(必写不然传不进去)
     *
     * @var array
     */
    protected $fillable = ['articlecate_id','articlecate_name','articlecate_pid','articlecate_show','articlecate_path','articlecate_status','articlecate_created_at','articlecate_updated_at'];

    public function articles()
    {
        return $this->hasMany('App\Model\Admin\Article','articlecate_id','articlecate_id');
    }
}
