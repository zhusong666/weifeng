<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Order;
use App\Model\Home\Goods;
use App\Model\Home\Details;
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

    //支付
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
        //获取订单号
    	$data = Order::where('order_id',$id)->first();

        /*//订单详情表的订单号 和 订单表的订单号 相同,获取
        $oid = Details::where('orderss_id','=',$id)->get();

        foreach ($oid as $k => $v) {
            
            $gid = $v->goods->goods_id;
        }

        // $status = Goods::where('goods_id',$gid)->first();

        $status = Goods::where('goods_id',$gid)->update(['goods_status' + 1]);
        // $res = Goods::where('goods_status');

        dump($status);

        dump($gid);

        dd($oid);*/

    	// dd($data['order_status']);
    	//修改状态
        $res = DB::table('wf_shop_orders')->where('order_id',$id)->update(['order_status'=>3]);

    	if($res){
    		return redirect('/comments');//?filter=1
    	} else {
    		return back()->with('error','确认收货失败');
    	}
    }

    //取消订单
    public function destroy(Request $request)
    {
        $oid = $request->id;

        $data = Order::where('order_id',$oid)->delete();

        $res = Details::where('orderss_id',$oid)->delete();

        if($data && $res){

            return redirect('/user/order')->with('success','取消订单成功');
        } else {

            return redirect('/user/order')->with('error','取消订单失败');
        }
    }

    //删除订单
    public function delete(Request $request,$id)
    {
        /*$oid = $request->id;

        dd($oid);

        $res = DB::table('wf_users')->where('admin_id',$id)->delete();
        // dd($res);

        if($res){

           $data = [
                'status'=>1,
                'msg'=>'删除成功!'
           ];
        } else {

            $data = [
                'status'=>0,
                'msg'=>'删除失败!'
           ];    
        }

        return $data;*/
    }
}