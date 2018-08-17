<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Home\Goods;
class GoodsController extends Controller
{
    public function details($id)
    {	

    	$goods = Goods::with('goodsimgs')->where('goods_id',$id)->get();
    		$imgs = [];
    	  foreach ($goods as $k => $v){
    	  	foreach($v['goodsimgs'] as $kk => $vv){
    	  		$imgs[] = $vv;
    	  	  }
          }


      $type = DB::table('wf_goods_type')->where('gid',$id)->get();
      // dump($type->colour);
      // $type = [];
      // foreach ($type as $k => $v) {
      //     $len = explode(',',$v->colour);
      //     // $type[] = $len;
      //      // $v[$k]['colour'] = $len;
      //     dump($len);
      //     dump($v->colour);
      //   }
        // dump($type);

       $good = Goods::find($id);
       $comments = $good->comments;
    	return view('/home/detail',['goods'=>$goods,'imgs'=>$imgs,'type'=>$type,'goods_id'=>$id,'comments'=>$comments]);
    }
}
