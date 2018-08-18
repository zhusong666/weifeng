<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'wf_article';//表名称
    protected $primaryKey = 'article_id';//主键id
    public $timestamps = false;//时间戳(不要)

    /**
     * 可以被批量赋值的属性。(必写不然传不进去)
     *
     * @var array
     */
    protected $guarded = [];

    public function cate()
    {
        return $this->belongsTo(\App\Model\Admin\Article_cates::class,'articlecate_id','articlecate_id');
    }

    
}
