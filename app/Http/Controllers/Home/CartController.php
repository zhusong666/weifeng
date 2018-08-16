<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Carts;
use App\Model\Home\Goods;
use DB;
class CartController extends Controller
{	



	public function index(Request $request)
	{	
		$uid = session('user_id');
    	

		$cart = DB::table('wf_goods_carts')
            ->join('wf_goods', 'gid', '=', 'goods_id')
            ->select('wf_goods_carts.*', 'wf_goods.*')
            ->get();
        $carts = [];
        foreach($cart as $k => $v){
        	 foreach($v as $kk => $vv){
        	 	// dump($vv);
        	 	$carts[] = $vv;
        	 }
        }
         $res = [];
        foreach ($cart as $k => $v) {
        	 $res[] = DB::table('wf_goods_img')->where('good_id',$v->goods_id)->first();
        }
        $price = 0;
        foreach($cart as $k => $v){
        	 $price += $v->price;
        	
        }
 		// dd($a);
   //      dump($cart);
        // dump($carts[$k]->price);
		return view('/home/cart',['cart'=>$cart,'res'=>$res,'price'=>$price]);



	}



	public function addcart(Request $request,$id)
	{	
		// echo 1111111;
		$uid = session('user_id');
		// dump($uid);
		if(empty($uid)){
			echo  "<script language=javascript>alert('请登入！');history.back();</script>";
		}else{
		// $good['goods_name'] = $request->input('goods_name');
			$cart['uid'] = $uid;
			$cart['gid'] = $id;
			$cart['tname'] = $request->input('sku_attr');
			$cart['colour'] = $request->input('sku_color');
			$cart['price'] = $request->input('sku_price');
			$cart['num'] = $request->input('num');
			// dump($cart);
			$data = Carts::create($cart);

			if($data){
                echo "<script> alert('加入购物车成功,点击确认去结算!');parent.location.href='/home/cart'; </script>"; 
   	         }
			
		}

		
	}


  
}
