<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Home\Goods_img;
use App\Model\Home\Goods;
class SearchController extends Controller
{
    
    //商品搜索
    public function search(Request $request)
    {	

           $goods = Goods::with('goodsimg')->orderBy('goods_id','asc')
            ->where(function($query) use($request){
                //商品名字查询
                $goods_name = $request->input('goods_name');

                if(!empty($goods_name)) {
                    $query->where('goods_name','like','%'.$goods_name.'%');
                }
                //分类下的商品
                $cates_id = $request->input('cates_id');
                
                if(!empty($cates_id)) {
                    $query->where('cates_id','like','%'.$cates_id.'%');
                }

            })->get();
            //让机型的值固定
            $dogoods = DB::table('wf_goods')->get();
            $timegoods = DB::table('wf_goods')->orderBy('goods_time','desc')->limit(10)->get();
            return view('home/list_search',['goods'=>$goods,'dogoods'=>$dogoods,'timegoods'=>$timegoods]);
    }

}
