<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
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
                    $query->where('admin_auth','=',$admin_auth);
                }
            })
            ->paginate(5);

        $count = count($res);
        // dd($res);
        return view('admin/user/index',['title'=>'后台用户展示页面','res'=>$res,'request'=>$request,'count'=>$count]);
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
    public function store(Request $request)
    {
        //获取数据        
        $res = $request->except('_token','repass');
         // dd($res);
        $res['admin_password'] = encrypt($request->input('admin_password'));

        $res['admin_addtime'] = time();

        $data = DB::table('wf_users')->insert($res);

        if($data){

            return redirect('/admin/user');
        } else {

            return redirect('/admin/user/create');
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
        //
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

        $pass = decrypt($res->admin_password);

        return view('admin/user/edit',['title'=>'用户的修改页面','res'=>$res,'pass'=>$pass]);
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
        $res = $request->except('_token','_method');
        $res['admin_password'] = encrypt($request->input('admin_password'));
        // dd($res);

       $data = DB::table('wf_users')->where('admin_id',$id)->update($res);

       if($data){

            return redirect('/admin/user')->with('success','session');

       } else {
            //待判断
            return redirect('/admin/user/{{$data->admin_id}}/edit')->with('error','session');
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
        //

        echo 23;
    }
}
