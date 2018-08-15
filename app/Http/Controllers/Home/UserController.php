<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\User;
use App\Model\Home\Goods;
use App\Model\Home\Goodsimg;
use App\Model\Home\Order;
use App\Model\Home\Details;
use Config;
use DB;

class UserController extends Controller
{
	public function details()
	{
		$username = session('username');

		$res = DB::table('wf_home_user')->where('username',$username)->first();

		return view('home.user.details',['res'=>$res]);
	}
    
    public function comment()
    {

    	return view('home.user.comment');
    }

    //用户详情修改
    public function update(Request $request, $id)
    {

    	$res = $request->except('_token','image');

    	//上传图片
        if($request->hasFile('image')){
        	//DB::table('wf_home_user')->
            $img = User::where('user_id',$id)->get();
            $sname = $img[0]->admin_pic;
            if($sname){
                $sname = '.'.$sname;
                unlink($sname);
            }

            //名字
            $name = date('Ymd',time()).rand(1111,9999);
            //后缀
            $suffix = $request->file('image')->getClientOriginalExtension();
            //移动
            $request->file('image')->move(Config::get('webconfig.upload'),$name.'.'.$suffix);

            //保存到数据表中
            $res['user_face']='/uploads/'.$name.'.'.$suffix;
        }

        $data = User::where('user_id',$id)->update($res);

        if($data){

        	return redirect('/user/details')->with('success','修改成功');
        } else {

        	return back()->with('error','修改失败');
        }
    }

    //用户地址
    public function address()
    {
    	echo 24;
    }

    //用户订单
    public function order(Request $request){

    	$uid = session('user_id');

    	//获取订单数据
    	// $orders = Order::where('uid','=',$uid)->get();

    	

    	$orders = Order::where('uid',$uid)
        ->where(function($query)use($request){
            $s = $request->input('s');
            if(!is_null($s)){
                if($s==0){
                    $query->where('order_status',$s);
                }else if($s==1){
                    $query->where('order_status','=',1);
                }else if($s==2){
                    $query->where('order_status','=',2);
                }
            }
        })
        ->paginate(4);



        // dump($orders);
        /*foreach ($orders as $k => $v) {

        	$res = $v;
        }

        dd($res);*/

        //////////////////////////////////////////////////////////
        //拿了一些数据
        // $a = $res->details;

       /* foreach ($res->details as $k => $v) {
        	// $aa = $v;
			
        	foreach ($v->goodsimg as $kk => $vv) {
        		
        		$b = $vv;
        	}

        	dd($v->goodsimg['goods_img']);
        }*/

       /* $b = $a->goods;
        dump($b);
        dd($a);*/

       /* foreach ($a as $k => $v) {
        	
        	$aa = $v->goods;
        }*/

        /*foreach ($a as $kk => $vv) {
        	
        	$aaa = $vv->goodsimg['goods_img'];
        }*/

        // dd($aaa);

        /////////////////////////////////////////////////////////

        /*$da = Details::where('orderss_id',$res->order_id)->get();

       
        //订单号
        // $ddh = $res->order_id;
        dump($da);

        // $aa = $ddh->details->details_cnt;
        // dump($aa);
        dd($res);*/
        ////////////////////////////////////////////////////////////////
        /*$res = Details::where('orderss_id',$res->order_id)->get();
        // dump($res);
        //把商品id从订单号里遍历出来
        $arr = [];
        foreach($res as $k => $v) {
           $arr[] = $v->goodss_id;
        }
        // dd($arr);
        //goods和goods_img表有没有id在$arr数组里,遍历出来放在good里
        $good = [];
        foreach ($arr as $k => $v) {
          $good[] = Goods::join('wf_goods_img','goods_id','=','good_id')
            ->where('goods_id',$v)
            ->first();
        }*/


	//////////////////////////////////// 出错 01:00
        // $orders[] = $good;

        /*foreach ($orders as $k => $v) {
        	
        	// foreach ($v as $ke => $ve) {
        	// 	$a = $ve['goods_img'];
        	// 	// dump($a);
        	// }

        	$a = $v;
        }
        dd($a);*/
        // dd($orders);
        // dump($good);
        // dd($orders);
        ////////////////////////////////////////////////////////////////

        
		$order = Order::where('uid','=',$uid)->get();

		// dd($order);

		foreach ($order as $k => $v) {
    		
    		$res = $v;
    	}

    	$info = $this->dealTmp($orders);

    	return view('home.user.order',['orders'=>$orders,'res'=>$res,'info'=>$info]);
    }

    private function dealTmp($orders)
    {
        $str = '<ul class="order-list">';

        foreach ($orders as $key => $val)
        {
            $status = $val->order_status;
            // $str .= $status;
            if($status == 0){
                $class = 'uc-order-item-pay';
                $samaury = '<div class="order-summary">
                            <div class="order-status">等待付款</div>
                            <p class="order-desc J_deliverDesc">
                                现在支付，预计2-3天送达
                                <span class="beta">Beta</span>
                            </p>
                        </div>';
                $action ='
                        <td class="order-actions">
                            <a class="btn btn-small btn-primary" href="/order/pay?id='.$val->order_id.'" target="_blank">立即支付</a>
                            <!--<a class="btn btn-small btn-line-gray" href="user/orderView?id='.$val->order_id.'">订单详情</a>-->
                        </td>';
            }elseif($status == 6) {
                $class = 'uc-order-item-shipping';
                $samaury = '<div class="order-summary"> <div class="order-status">已退款</div>   </div>';
                $action ='
                        <td class="order-actions">
                            <!--<a class="btn btn-small btn-line-gray" href="user/orderView?id='.$val->order_id.'">订单详情</a>-->
                        </td>';
            }else{
                $class = 'uc-order-item-finish';
                switch($status){
                    case 1:
                        $name = '未发货';
                    break;
                    case 2:
                        $name = '待收货';
                    break;
                    case 3:
                        $name = '已收货';
                    break;
                    case 4:
                        $name = '退货中';
                    break;
                    case 7:
                        $name = '已收货';
                    break;
                    default:
                        $name = '';
                }
                $samaury = '<div class="order-summary"> <div class="order-status">'.$name.'</div>     </div>';
                $action ='
                        <td class="order-actions">
                            <!--<a class="btn btn-small btn-line-gray" href="user/orderView?id='.$val->id.'">订单详情</a>-->';
                $action .= $status==2? '<a class="btn btn-small  btn-primary" href="/user/packin?id='.$val->details->orderss_id.'">确认收货</a>':''; 
                if($status==3){
                    
                }               
                $action .='</td>';
            }
            $str .='<li class="uc-order-item '.$class.'">
                    <div class="order-detail">';   
                    $str .= $samaury;   
                    $str .='<table class="order-detail-table">
                            <thead>
                                <tr>
                                    <th class="col-main">
                                        <p class="caption-info">
                                            '.date('Y年m月d日 H:i',strtotime($val->order_addtime)).'
                                            <span class="sep">|</span>
                                            '.$val->order_linkman.'
                                            <span class="sep">|</span>
                                            订单号：
                                            <a href="/user/orderView?num='.$val->order_id.'">'.$val->order_id.'</a>
                                            <span class="sep">|</span>
                                            在线支付
                                        </p>
                                    </th>
                                    <th class="col-sub">
                                        <p class="caption-price">
                                            订单金额：
                                            <span class="num">'.$val->order_total.'</span>
                                            元
                                        </p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="order-items">
                                        <ul class="goods-list">';
                                        foreach($val->details as $kk=>$vv){
                                        		
                                        	
                                            
                                            $str .='<li>
                                                <div class="figure figure-thumb">
                                                    <a href="" target="_blank">
                                                        <img src="'.$vv->goodsimg['goods_img'].'" width="80" height="80" alt="'.$vv['goods_name'].'"></a>
                                                </div>
                                                <p class="name">
                                                    <a target="_blank" href="">'.$vv['goods_name'].'</a>
                                                </p>
                                                <p class="price">'.$vv['details_price'].'元 × '.$vv['details_cnt'].'</p>
                                            </li>';
                                        }            
                                       $str .= '</ul>
                                    </td>';
                                    $str .=$action;
                                $str .='</tr>
                            </tbody>
                        </table>
                    </div>
                </li>';
        }
        $str .='</ul>';
        return $str;
    }


}
