<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Order;
use DB;

class OrderController extends Controller
{
    //订单提交成功
    public function pay(Request $request)
    {

        // dd(session('order_id'));
    	$order_id = $request->id;
    	
        //查询订单数据库
        $order = Order::where('order_id',$order_id)->first();

        return view('home.order.pay',['order'=>$order]);
    }

    //支付成功
    public function success($id)
    {

    	$res = DB::table('wf_shop_orders')->where('order_id',$id)->first();
    	
    	$status = $res->order_status;

    	if($status == '0'){

    		$result = DB::table('wf_shop_orders')->where('order_id',$id)->update(['order_status'=>1]);

    		$result = DB::table('wf_shop_orders')->where('order_id',$id)->update(['pay_status'=>1]);

    		return view('home.order.success');

    	}else{

    		return redirect('home.user.order')->with('error','支付失败');

    	} 
    }

    //支付成功
    public function paysuccess(Request $request)
    {
    	//获取id
    	$id = $request->id;
    	$data = Order::where('order_id',$id)->first();

    	// dd($data['order_status']);
    	//修改状态
    	$res = DB::table('wf_shop_orders')->where('order_id',$id)->update(['order_status'=>3]);

    	if($res){
    		return redirect('/user/comment');//?filter=1
    	} else {
    		return back()->with('error','确认收货失败');
    	}
    }
}