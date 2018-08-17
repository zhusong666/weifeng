<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Goods;
use App\Model\Home\User;
use App\Model\Home\Comment;
use DB;
class CommentController extends Controller
{
    public function index()
    {
        //判断用户是否登录
        $user_id = session('user_id');
        if( !$user_id ) {
            return redirect('/login');
        }
        //已收货的商品
        $user = User::find($user_id);
        $goods_num = $user->goods_details()->where('order_status',3)->pluck('goodss_id');
        //已评价的商品
        $ready_num = Comment::where('user_id',$user_id)->pluck('goods_id');

        $ready_com = $ready_num->intersect($goods_num)->toArray();
        $not_com   = $goods_num->diff($ready_num)->toArray();

        $ready_com = Goods::whereIn('goods_id',$ready_com)->get();
        $not_com = Goods::whereIn('goods_id',$not_com)->get();
       

    	return view('home.comment.comment',['ready_com'=>$ready_com,'not_com'=>$not_com]);
    }

    public function create()
    {
        
       

        
       // $res = DB::table('wf_goods')->get();

    	return view('home.comment.create');
    }
}
