<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use DB;


class LoginController extends Controller
{

	public function login()
	{

		return view('/admin/user/login',['title'=>'威锋网后台登录']);
	}

	public function dologin(Request $request)
	{
		
		$res = $request->except('_token');
		//判断用户名是否正确
		$name = $request->input('username');
		$res = DB::table('wf_users')->where('admin_name',$name)->first();

		if(!$res){

			return redirect('/admin/login')->with('error','用户名或密码错误');
		}

		//判断密码是否正确 用查询到的用户名来获取它的密码
		$pass = $request->input('password');
		//解密密码
		$admin_pass = decrypt($res->admin_password);

		if($pass != $admin_pass){

			return back()->with('error','用户名或密码错误');
		}

		//判断验证码
        $code = $request->input('code');

        if($code != session('code')){

            return back()->with('error','验证码错误');
        }

		
		//存储session信息  给中间件使用
        session(['admin_name'=>$res->admin_name]);
        session(['id'=>$res->admin_id]);
        session(['admin_auth'=>$res->admin_auth]);
		return redirect('/')->with('success','恭喜你登录成功');
	}

	public function captcha()
    {
        $phrase = new PhraseBuilder;
        // 设置验证码位数
        $code = $phrase->build(4);
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder($code, $phrase);
        // 设置背景颜色
        $builder->setBackgroundColor(123, 203, 230);
        $builder->setMaxAngle(25);
        $builder->setMaxBehindLines(0);
        $builder->setMaxFrontLines(0);
        // 可以设置图片宽高及字体
        $builder->build($width = 90, $height = 36, $font = null);
        // 获取验证码的内容
        $phrase = $builder->getPhrase();
        // 把内容存入session
        // \Session::flash('code', $phrase);

        session(['code'=>$phrase]);

        // 生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header("Content-Type:image/jpeg");
        $builder->output();
    }

    //退出登录
    public function logout()
    {	
    	//退出时清除session信息 调到登录页面
    	session(['admin_name'=>null]);
        session(['admin_auth'=>null]);
        session(['id'=>null]);

        return redirect('admin/login');
    }

    //修改密码
    public function pass()
    {

    	return view('/admin/user/repass',['title'=>'重置密码页面']);
    	
    }


    public function repass(Request $request)
    {

    	// $res = $request->except('_token','_method','repassword');
    	// dd($res);

    	//获取输入的旧密码
    	$oldpass = $request->input('oldpassword');
    	//获取session的 id
    	$rs = DB::table('wf_users')->where('admin_id',session('id'))->first();
    	//通过id解析密码
    	$rspass = decrypt($rs->admin_password);

    	//判断输入的旧密码和数据库的密码是否一致
		if($oldpass != $rspass){

			return back()->with('error','旧密码格式错误');
		}

		//如果一致,进行判断新密码和确认密码是否一致
		$pass = $request->input('password');
		$repass = $request->input('repassword');

		if($pass != $repass){

			return back()->with('error','两次密码不一致');
		}

		//如果两次密码一致,加密
        $res['admin_password'] = encrypt($pass);

        $data = DB::table('wf_users')->where('admin_id',session('admin_id'))->update($res);
        //判断是否成功

        if($data){

            return redirect('/admin/user')->with('success','修改成功');

        } else {

            return redirect('/admin/pass')->with('error','修改失败');
        }
    }


    public function up(Request $request, $id)
    {   
        //获取id
        $result = DB::table('wf_users')->where('admin_id',$id)->first();
        $status = $result->admin_status;
        
        //更改状态
        if($status=='0'){
            $result = DB::table('wf_users')->where('admin_id',$id)->update(['admin_status'=>1]);
        } else if($status=='1'){
            $result = DB::table('wf_users')->where('admin_id',$id)->update(['admin_status'=>0]);
        } 
        //返回结果
        if($result){
            $data = [
                'status'=>1,
                'msg'=>'操作成功！'
            ];
           return $data;   
        }
    	
    }
    
}
