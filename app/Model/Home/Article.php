<?php

namespace App\Model\Home;

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
    protected $fillable = ['article_id','articlecate_id','article_title','article_content','article_status','article_url','created_at','updated_at'];

    //与文章分类表关联
}
