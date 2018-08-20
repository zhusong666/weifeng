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
        //查询
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
        //获取订单号
    	$orders = DB::table('wf_shop_orders')->where('order_id',$id)->first();
        //订单详情表的订单号 和 订单表的订单号 相同,获取
    	$res = Details::where('orderss_id','=',$id)->get();

       /* $data = [];
        foreach ($res as $k => $v) {
            
            $data[] = $v->cname;
        }*/

        // dump($res);

        // dump($data);

        //把商品id从订单号里遍历出来
        /*$arr = [];
        foreach($res as $k => $v) {
           $arr[] = $v->goodss_id;
        }*/
        // dd($arr);

        //goods和goods_img表有没有id在$arr数组里,遍历出来放在good里

        /*$good = [];
        foreach ($arr as $k => $v) {
          $good[] = Goods::join('wf_goods_img','goods_id','=','good_id')
            ->where('goods_id',$v)
            ->first();
        }*/

        // $good[] = $data;

        // dd($good);

    	return view('/admin/order/detail',['title'=>'订单详情','res'=>$res]);
    }

    public function dset(Request $request, $id)
    {
        //根据表单传输的订单号获取订单表里的订单号
        $result = DB::table('wf_shop_orders')->where('order_id',$id)->first();
        //订单状态
        $status = $result->order_status;
        
        //更改订单状态
        if($status=='1'){
            $result = DB::table('wf_shop_orders')->where('order_id',$id)->update(['order_status'=>2]);
        } else if($status=='2'){
            $result = DB::table('wf_shop_orders')->where('order_id',$id)->update(['order_status'=>3]);
        } 
        //返回处理结果
        if($result){
            $data = [
                'status'=>1,
                'msg'=>'操作成功！'
            ];
           return $data;   
        }
    }


}
