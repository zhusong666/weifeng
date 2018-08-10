<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Goods;
use App\Model\Admin\Goods_img;
use App\Model\Admin\Details;
use DB;

class OrderController extends Controller
{
    
    public function index(Request $request)
    {
    	$res = DB::table('wf_shop_orders')
            ->where(function($query) use($request){
                //关键字
                $order_id = $request->input('order_id');
                //如果订单号不为空
                if(!empty($order_id)){
                    $query->where('order_id','=',$order_id);
                }
            })
            ->paginate(5);
        //统计本页面有几条数据
        $cou = count($res);

    	return view('/admin/order/index',['title'=>'后台订单管理','res'=>$res,'request'=>$request,'cou'=>$cou]);
    }

    public function detail($id)
    {
    	$orders = DB::table('wf_shop_orders')->where('order_id',$id)->first();
    	$res = Details::where('orderss_id','=',$id)->get();

        $arr = [];
        foreach($res as $k => $v) {
           $arr[] = $v->goodss_id;
        }
        dump($arr);
        $goods = DB::table('wf_goods')->whereIn('goods_id',$arr)->get();

        $goods = DB::table('wf_goods_img')->whereIn('good_id',$arr)->get();

        // dump($good.good_id);


        

        dump($goods);
        // dd($good);

        // dd($goods[0].goods_id);
        // $aa = [];
        // foreach($goods as $k=>$v){

            // dd($v->goods_id);

            // $gg = Goods::with('goodsimg')->where('good_id',$v['goods_id'])->first();

            // $zou = Goods::with('goods_img')->where('goods_id',$v->goods_id)->first();
            // $k->goods_id = $zou->goods_img;

            // dd($gg);
            // $aa[] = $v;
            // $a = [];
            // foreach ($v as  $kk =>$vv) { 
            //     // $zou = Goods::with('goods_img')->where('goods_id',$vv['goods_id'])->first();
            //     // $v[$kk]['goods_id'] = $zou->goods_img.goods_img;

            //     $a[] = $vv;
            // }
           
        // }
        // dd($a);
        // dump($goods);
        // dd($img);





        /*$good = DB::table('wf_goods_img')->whereIn('good_id',$arr)->get();

        $img = [];
        foreach ($good as $key => $value) {
            
            $img[] = $value->goods_img;
        }

        dump($arr);
        dump($goods);
        dump($good);
        dd($img);*/
        





        /*$name = [];
        foreach($goods as $kk=>$vv){

            // foreach($vv as $kkk=>$vvv){
                // $img = DB::table('wf_goods_img')->whereIn('goods_id',$vvv['good_id'])->first();
                // $vv[$kkk]['goods_img'] = $img->goodsimg->goods_img;
                $name[] = $vv;
            }
            
        }*/

        // dd($goods);

        /*$goods = DB::table('wf_goods')
            ->whereIn('goods_id',$arr)
            ->get();

        $name =[];
        foreach($goods as $kk=>$vv){

            $name[] = $vv->goods_name;
        }

        $goods_img = DB::table('wf_goods_img')
            ->whereIn('good_id',$arr)
            ->get();

        $img = [];
        foreach($goods_img as $kkk=>$vvv){
            $img[] = $vvv->goods_img;
        }

        dump($goods_img);
        dd($img);*/

        /*$details = DB::table('wf_orders_details')
            ->join('wf_goods_img','goodss_id','=','good_id')
            ->join('wf_goods','goodss_id','=','goods_id')
            ->select('wf_orders_details.*','wf_goods_img.goods_img','wf_goods.goods_name')
            ->get();*/

        $details = DB::table('wf_orders_details')
            ->join('wf_goods_img','goodss_id','=','good_id')
            ->join('wf_goods','goodss_id','=','goods_id')
            ->join('wf_shop_orders','orderss_id','=','order_id')
            ->select('wf_orders_details.*','wf_goods_img.goods_img','wf_goods.goods_name','wf_shop_orders.order_id')
            ->get();

        // dd($details);

    	return view('/admin/order/detail',['title'=>'订单详情','details'=>$details]);
    }

    public function dset(Request $request, $id)
    {
       //获取id
        $result = DB::table('wf_shop_orders')->where('order_id',$id)->first();
        $status = $result->order_status;
        
        //更改状态
        if($status=='1'){
            $result = DB::table('wf_shop_orders')->where('order_id',$id)->update(['order_status'=>2]);
        } else if($status=='2'){
            $result = DB::table('wf_shop_orders')->where('order_id',$id)->update(['order_status'=>3]);
        } 
        //返回结果
        if($result){
            $data = [
                'status'=>1,
                'msg'=>'操作成功！'
            ];
           return $data;   
        }
    }


}
