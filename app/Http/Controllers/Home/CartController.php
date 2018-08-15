<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Carts;

class CartController extends Controller
{	



	public function index()
	{	

		
		
		return view('/home/cart');
	}



	public function addcart($id)
	{	
		$uid = session('user_id');
		if(empty($uid)){
			echo "<script language=javascript>alert('请登入！');history.back();</script>";
		}else{
			// $good['goods_name'] = $request->input('goods_name');
			$cart['uid'] = 1;
			$cart['gid'] = $id;
			
			// dump($cart);
			$data = Carts::create($cart);

			if($data){
               return redirect('/home/cart');  
            }
		}

		
	}









  
}
