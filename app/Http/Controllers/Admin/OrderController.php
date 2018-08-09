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
    	/*$orders = DB::table('wf_shop_orders')->where('order_id',$id)->first();
    	$details = Details::where('order_id','=',$id)->get();    */

        $details = DB::table('wf_orders_details')
            ->join('wf_goods_img','goodss_id','=','good_id')
            ->join('wf_goods','goodss_id','=','goods_id')
            ->select('wf_orders_details.*','wf_goods_img.goods_img','wf_goods.goods_name')
            ->get();

    	return view('/admin/order/detail',['title'=>'订单详情','details'=>$details]);
    }

    public function dset(Request $request, $id)
    {
       //获取id
        $result = DB::table('wf_shop_orders')->where('orders_id',$id)->first();
        $status = $result->order_status;
        
        //更改状态
        if($status=='1'){
            $result = DB::table('wf_shop_orders')->where('orders_id',$id)->update(['order_status'=>2]);
        } else if($status=='2'){
            $result = DB::table('wf_shop_orders')->where('orders_id',$id)->update(['order_status'=>3]);
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
