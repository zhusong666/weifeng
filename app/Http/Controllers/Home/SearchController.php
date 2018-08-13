<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Home\Goods_img;
use App\Model\Home\Goods;
class SearchController extends Controller
{
    
    public function search(Request $request)
    {	
           $goods = Goods::with('goodsimg')->orderBy('goods_id','asc')
            ->where(function($query) use($request){
                //商品名字查询
                $goods_name = $request->input('goods_name');

                if(!empty($goods_name)) {
                    $query->where('goods_name','like','%'.$goods_name.'%');
                }

            })->get();

            // dd($goods->goods_id);
            // dd($goods);
            // $id = [];
            // foreach($goods as $k => $v){
            // 	$img = Goods::with('goodsimg')->where('goods_id',$v->goods_id)->get();
            	
            // }
            return view('home/list_search',['goods'=>$goods,'request'=>$request]);
    }
}
