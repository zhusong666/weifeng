<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Home\Goods_img;
use App\Model\Home\Goods;
use App\Model\Home\CateGory;
use App\Model\Home\ArticleCate;
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
         //循环遍历把图片路经赋给$data
         foreach ($data as $k => $v) {
         	foreach ($v['goods'] as  $kk =>$vv) { 
         		$img = Goods::with('goodsimg')->where('goods_id',$vv['goods_id'])->first();
                //定义一个下标把图片赋给$data
         		$v['goods'][$kk]['imgs'] = $img->goodsimg->goods_img;
         	}
         }
         //查询10条销量最大的数据
        $img = Goods::with('goodsimg')->orderBy('goods_volume','desc')->limit(10)->get();
         //随机获取手机分类下的8个商品
         $shouji = Goods::with('goodsimg')->where('cates_id',1)->orderBy(\DB::raw('RAND()'))->take(8)->get();
         //随机获取笔记本分类下的8个商品
         $bjb = Goods::with('goodsimg')->where('cates_id',3)->orderBy(\DB::raw('RAND()'))->take(8)->get();

         //轮播图
        $res = DB::table('wf_lunbo')->get();
        //文章分类
        // $rs = DB::table('wf_articlecates')->get();
        //  //文章内容
        // $ress = DB::table('wf_article')->get();
        // dd($ress);
        // foreach ($ress as $key => $value) {
        //     $art = Article::with('article_content')->where('article_id',$value['article_id'])->first();
        // }
        // dd($art);
        $ress = ArticleCate::with('articles')->get();
		return view('/home/index',['data'=>$data,'img'=>$img,'shouji'=>$shouji,'bjb'=>$bjb,'res'=>$res,
            'ress'=>$ress

            ]);
    }










}
