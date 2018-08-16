<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Goods;

class CommentController extends Controller
{
    public function show(Request $req,$goods_id)
    {
    	$goods = Goods::find($goods_id);

    	$comments = $goods->comments;
    	
    	return view('home.comment.comment',compact('comments'));
    }

    public function create()
    {
    	return view('home.comment.create');
    }
}
