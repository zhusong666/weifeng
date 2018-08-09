<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class CateGory extends Model
{
    
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'wf_category';

    protected $primaryKey = 'cate_id';

    public $timestamps = false;


    //与用户关联的属性
    public function goods()
    {
    	return $this->hasMany('App\Model\Home\Goods','cates_id');
    }
}
