<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Requests\RegisterRequest;
use App\Model\Home\User;
use Mail;
use Hash;


class RegisterController extends Controller
{
   //注册
    public function register()
    {

    	return view('home.register');
    }

    //注册
    public function doregister(Request $request)
    {

    	//获取表单的值
    	$res = $request->only('username','');
    	$res['user_password'] = Hash::make($request->input('password'));
    	$res['user_email'] = $request->input('email');
    	$res['user_phone'] = $request->input('phone');
    	$res['user_status'] = 0;
    	$res['user_token'] = str_random(60);
    	$res['user_addtime'] = time();

    	//注册
    	$data = User::insertGetId($res);

        if($data){

            // return redirect('/')->with('success','添加成功');

            //发送邮件
    		Mail::send('home.emails.reminder', ['id' => $data,'token'=>$res['user_token']], function ($m) use ($res) {

	            $m->from(env('MAIL_USERNAME'), '小米米商城人力资源部');

	            $m->to($res['user_email'], $res['username'])->subject('诚邀加入小米米集团');
	        });

	        return view('home.emails.tixing',['title'=>'新用户激活的提醒信息']);

        } else {

        	return back()->with('error','添加失败');

        }
    }

    //用户激活
    public function jihuo(Request $request)
    {
    	//获取用户邮箱点击过来的值
        $id = $request->input('id');

        $token = $request->input('token');

    	//获取数据
        $data = User::where('user_id',$id)->first();

        if($data->user_token != $token){

            abort('404');
        }
    	//把status 从0变成1
        $rs['user_status'] = '1';

        //修改数据
        $res = User::where('user_id',$id)->update($rs);

        if($res){

            return redirect('/login');
        } else {

            return back();
        }

    }

    public function tixing()
    {

    	return view('home.emails.tixing');
    }

    public function checkuser(Request $request)
    {

    	$user = $request->input('username');

    	$res = User::where('username',$user)->first();

    	if($res){

    		echo 1;
    	} else{

    		echo 0;
    	}
    }
}
