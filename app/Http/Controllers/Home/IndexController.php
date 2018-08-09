<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Home\Goods_img;
use App\Model\Home\Goods;
use App\Model\Home\CateGory;
use Config;
class IndexController extends Controller
{
    
    public function index()
    {	
    	//查询category数据
    	$cate = DB::table('wf_category')->where('cate_pid',0)->get();
    	//把cate_id遍历出来
    	$arr = [];
    	foreach($cate as $k => $v){
    		$arr[] = $v->cate_id;
    	}
    	//一对多查询(查询每个分类下的所有商品)
         $data = CateGory::with('goods')->whereIn('cate_id',$arr)->get();
         $ids = [];
         foreach ($data as $k => $v) {
         	
         	foreach ($v['goods'] as  $kk =>$vv) { 
         		$zou = Goods::with('goodsimg')->where('goods_id',$vv['goods_id'])->first();
         		$v['goods'][$kk]['imgs'] = $zou->goodsimg->goods_img;
         	}
         }
         dump($data);





        
		return view('/home/index',['data'=>$data]);
    }









     public function goodList()
    {	
    	
    	// dd($cate);
    	return view('/home/index',['cate'=>$cate]);
    }

}
