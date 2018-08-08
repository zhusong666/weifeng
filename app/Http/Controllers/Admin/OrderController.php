<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class OrderController extends Controller
{
    
    public function index(Request $request)
    {
    	// echo 23;
    	$res = DB::table('wf_shop_orders')->paginate(3);

        $cou = count($res);


    	return view('/admin/order/index',['title'=>'后台订单管理','res'=>$res,'request'=>$request,'cou'=>$cou]);
    }

    public function detail($id)
    {
    	$orders = DB::table('wf_shop_orders')->where('order_id',$id)->first();
    	$details = DB::table('wf_orders_details')->where('order_id','=',$id)->get();
    	$count = count($details);

    	return view('/admin/order/detail',['title'=>'订单详情','orders'=>$orders,'details'=>$details]);
    }
}
