<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Model\Home\User;
use DB;
use Hash;

class LoginController extends Controller
{
    
    public function login()
    {

        return view('home.login');
    }

    //登录
    public function dologin(Request $request)
    {

        $res = $request->except('_token');
        //获取输入的用户名
        $name = $request->input('username');
        $res = User::where('username',$name)->first();

        //如果查询不到,返回
        if(!$res){

            return redirect('/login')->with('error','用户名或密码错误');
        }

        //判断密码是否正确 用查询到的用户名来获取它的密码
        $pass = $request->input('password');

        /*//解密密码
        $user_password = decrypt($res->user_password);*/

        //判断密码
        if(!Hash::check($pass,$res->user_password)){
            return back()->with('error','用户名或者密码有误');
        }

        //验证码
        $Vcode = $request->input('Vcode');
        if(session('Vcode')!=$Vcode){
            return back()->with('error','验证码有误!');
        }

        //根据用户名 查询状态,0->不让登录
        if($res->user_status == '0'){
            
            return back()->with('error','请到注册时填写的邮箱进行激活,否则将不能登录!');
        }
        
        //存储session信息  给中间件使用
        session(['username'=>$res->username]);
        session(['user_id'=>$res->user_id]);
        return redirect('/')->with('success','恭喜你登录成功');
    }

    //验证码
    public function getCaptcha()
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        Input::session()->flash('Vcode', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }
    
    //退出
    public function logout()
    {
        //清除session内容
        session(['username'=>null]);
        session(['user_id'=>null]);

        return redirect('/login');
    }

    //验证用户名.邮箱
    public function editpass()
    {
        return view('home.password');
    }

    //处理
    public function doeditpass(Request $request)
    {
        //获取表单的值
        $username = $request->input('username');
        $email = $request->input('email');
        $phone = $request->input('phone');

        //通过name查找
        $user = User::where('username',$username)->first();

        //判断用户名、手机号、密码是否正确
        if($phone != $user->user_phone){
            session(['user_id'=>null]);
            return back()->with('error','手机号错误!');
        }
        if($email != $user->user_email){
            session(['user_id'=>null]);
            return back()->with('error','邮箱错误!');

        }

        //如果都正确把id存入session
        session(['user_id'=>$user->user_id]);
        return redirect('/repass')->with('success','恭喜你验证成功!');

    }

    public function checkname(Request $request){

        $user = $request->input('username');

        $res = User::where('username',$user)->first();

        if($res){

            echo 1;
        } else{

            echo 0;
        }
    }

    //修改密码
    public function repass()
    {

        return view('home.repass');
    }

    //保存修改的密码
    public function dorepass(Request $request)
    {   
        $data = $request->only('password','confirm_password');

        //密码加密
        $res['user_password'] = encrypt($data['password']);

        //获取id
        $id = session('user_id');

        //发送修改
        try{

            $data = User::where('user_id',$id)->update($res);
           
            if($data){
                session(['user_id'=>null]);
                return redirect('/login')->with('success','密码修改成功');
            }
        }catch(\Exception $e){

            return back()->with('error','错误');
        }

    }

}

