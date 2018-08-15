<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Config;
use App\Http\Requests\FormRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取总条数
        // $da = DB::table('wf_users')->get();
        //pageinate分页,统计的是当前页显示的条数
        $res = DB::table('wf_users')
            ->where(function($query) use($request){
                //关键字
                $admin_name = $request->input('admin_name');
                $admin_auth = $request->input('admin_auth');
                //用户名不为空
                if(!empty($admin_name)){
                    $query->where('admin_name','like','%'.$admin_name.'%');
                }
                //权限不为空
                if(!empty($admin_auth)){
                    $query->where('admin_auth',$admin_auth);
                }
            })
            ->paginate(5);

        //count统计条数,发送到页面
        // $count = count($da);
        $cou = count($res);

        // dd($res);

        return view('admin/user/index',['title'=>'后台用户展示页面','res'=>$res,'request'=>$request,'cou'=>$cou]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/user/add',['title'=>'用户添加页面']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormRequest $request)
    {
        //获取数据        
        $res = $request->except('_token','admin_repass','image');
         // dd($res);
        //密码加密
        $res['admin_password'] = Hash::make($request->input('admin_password'));        

        //上传图片
        if($request->hasFile('image')){

            // dd(webconfig.upload);
            //名字
            $name = date('Ymd',time()).rand(1111,9999);
            //后缀
            $suffix = $request->file('image')->getClientOriginalExtension();

            //移动
            $request->file('image')->move(Config::get('webconfig.upload'),$name.'.'.$suffix);

            $res['admin_pic'] = '/uploads/'.$name.'.'.$suffix;
        }

        $res['admin_addtime'] = time(); 

        $data = DB::table('wf_users')->insert($res);

        if($data){

            return redirect('/admin/user')->with('success','添加成功');;
        } else {

         return redirect('/admin/user/create')->with('error','添加失败');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        /*$result = DB::table('wf_users')->where('admin_id',$id)->first();
        dd($result);die;*/
        /*$status = $result->admin_status;


        if($status=='0'){
            $result = DB::table('wf_users')->where('admin_id',$id)->update(['admin_status'=>1]);
        } else if($status=='1'){
            $result = DB::table('wf_users')->where('admin_id',$id)->update(['admin_status'=>0]);
        } 
      
        if($result){
            $data = [
                'status'=>0,
                'msg'=>'操作成功！'
            ];
           return $data;   
        }*/
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 获取数据
        $res = DB::table('wf_users')->where('admin_id',$id)->first();

        // $pass = decrypt($res->admin_password);

        return view('admin/user/edit',['title'=>'用户的修改页面','res'=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //获取数据
        $res = $request->except('_token','_method','image');
        //上传图片
        if($request->hasFile('image')){

            $img = DB::table('wf_users')->where('admin_id',$id)->get();
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
            $res['admin_pic']='/uploads/'.$name.'.'.$suffix;
        }

        
        try{

            $data = DB::table('wf_users')->where('admin_id',$id)->update($res);

            if($data){

                return redirect('/admin/user')->with('success','修改成功');
            }
        }catch(\Exception $e){

           return redirect('/admin/user')->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 

        $img = DB::table('wf_users')->where('admin_id',$id)->get();
        // dump($img);
        $name = $img[0]->admin_pic;
        if(!empty($name)){
            $name = '.'.$name;
            unlink($name);
        }
        
        $res = DB::table('wf_users')->where('admin_id',$id)->delete();
        // dd($res);

        if($res){

           $data = [
                'status'=>1,
                'msg'=>'删除成功!'
           ];
        } else {

            $data = [
                'status'=>0,
                'msg'=>'删除失败!'
           ];    
        }

        return $data;
    }
}
