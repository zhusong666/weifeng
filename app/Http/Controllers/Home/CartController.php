<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Carts;
use App\Model\Home\Goods;
use DB;
use Session;
class CartController extends Controller
{	

	//购物车显示页
	public function index(Request $request)
	{	
		$uid = session('user_id');
		//判断session中uid是否为空
		if(empty($uid)){
				echo "<script> alert('请登入!');parent.location.href='/login'; </script>"; 
			}else{
			$cart = DB::table('wf_goods_carts')
	            ->join('wf_goods', 'gid', '=', 'goods_id')
	            ->select('wf_goods_carts.*', 'wf_goods.*')
	            ->where('uid',$uid)
	            ->get();
	         $res = [];
	        foreach ($cart as $k => $v) {
	        	 $res[] = DB::table('wf_goods_img')->where('good_id',$v->goods_id)->first();
	        }
	       
			return view('/home/cart',['cart'=>$cart,'res'=>$res]);

		}

	}

	// 加入购物车
	public function addcart(Request $request,$id)
	{	
		$uid = session('user_id');
		if(empty($uid)){
			echo "<script> alert('请登入!');parent.location.href='/login'; </script>"; 
		}else{
			$cart['uid'] = $uid;
			$cart['gid'] = $id;
			$cart['tname'] = $request->input('sku_attr');
			$cart['colour'] = $request->input('sku_color');
			$cart['price'] = $request->input('sku_price');
			$cart['num'] = $request->input('num');
			$data = Carts::create($cart);
			if($data){
                echo "<script> alert('加入购物车成功,点击确认去结算!');parent.location.href='/home/cart'; </script>"; 
   	         }
			
		}

		
	}

	//删除
	 public function delete($id)
    {   
       
        $re =  Carts::where('tname',$id)->delete();
        //   return($re);
       //    0表示成功 其他表示失败
        if($re){
            $data = [
                'status'=>0,
                'msg'=>'删除成功！'
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'删除失败！'
            ];
        }
        return $data;    
    }
    //购物车结算
     public function ajaxcart(Request $request)
    {   
       	$arr = $request->input('arr');
       	$re = [];
        foreach($arr as $k=>$v){

            $data = array('cart_id'=>$v[0],'gid'=>$v[1],'uid'=>$v[2],'num'=>$v[3],'order_cnt'=>$v[4],'prs'=>$v[5],'tname'=>$v[6],'price'=>$v[7]);
            $re[] = $data;
             
        }
		$res = Session::put(['res'=>$re]);
     

      // $a =Session::get('res');

      if($res){
      		return '1';
      	}else{
      		return '0';
      	}

    }

     public function order()
    {   

    	$uid = session('user_id');
    	$res = DB::table('wf_user_address')->where('uid',$uid)->get();

    	 $cart = Session::get('res');

    	 $carts = [];
    	 foreach($cart as $k => $v){
			$v[] = DB::table('wf_goods_img')->where('good_id',$v['gid'])->first();
		 	$carts[] = $v;
		 	
    	 }

        return view('home.order.confirm',['res'=>$res,'carts'=>$carts]);
    }


    public function count(Request $request)
    {   
    	$add = $request->input('add');
    	$uid = session('user_id');
    	$cart = Session::get('res');
    	// dd($cart);die;
    	//$a = [];
  //   	$b = [];
    	$total_price = 0;
    	$order_cnt = 0;
		foreach($cart as $cartVal){
		// dd($cartVal['price']);
			$total_price += $cartVal['price'] * $cartVal['num'];
			$order_cnt += $cartVal['num'];
		}

        // 生成订单号
		$order_id = date('Ymd',time()).rand(11111111,99999999);
		$order_linkman = $add[0][0];
		$order_address = $add[0][1];
		$order_phone   = $add[0][2];
		//订单号存session
		session(['order_id'=>$order_id]);
		$order_data = [
			'order_id'=>$order_id,
			'uid' => $uid,
			'order_time'=>time(),
			'order_linkman'=>$order_linkman,//收货人姓名
			'order_address'=>$order_address,//收货人地址
			'order_phone'=>$order_phone,//收货人phone
			'order_total'=>$total_price,//总金额
			'order_cnt'=>$order_cnt,//商品数亮
			'pay_status'=>0,//订单状态0未付款
			'order_status'=>0,
			'order_msg' => '',//订单备注
			'order_addtime' =>time()
		];
		DB::beginTransaction();
		 try{
           
            DB::table('wf_shop_orders')->insert($order_data);
	        foreach($cart as $cartItem){
			
	        	$order_Item = [
	        		'orderss_id' => $order_id,
	        		'goodss_id'  => $cartItem['gid'],
	        		'cates_id'   => 0,
	        		'details_price' => $cartItem['price'],
	        		'details_cnt' => $cartItem['num']
	        	];
	        	
            	DB::table('wf_orders_details')->insert($order_Item);
            	DB::table('wf_goods_carts')->where('cart_id',$cartItem['cart_id'])->delete();
			}

			DB::commit();//成功，提交事务

         }catch(\Exception $e){
         	 DB::rollBack();//失败，回滚事务
             return '0';

         }


         return '1';


	
       // return $cart;

        // order_id order_type uid order_time order_linkman order_total order_cnt order_address order_phone pay_stytus 
        // order_msg order_addtime




    }






  
}
