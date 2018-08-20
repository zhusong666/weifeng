<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Role;
use App\Model\Admin\Permission;
use DB;


class RoleController extends Controller
{   


     /**
    *    角色添加权限页面
    *
    *   @return \Illuminate\Http\Response
    */
    public function role_per($id)
    {
        //获取角色名
        $role_name = Role::find($id);

        //获取所有的权限
        $permission = Permission::get();

           //第一种方式
        $role_per = $role_name->permissions->pluck('id');

        $parr = $role_per->toArray();


        return view('admin.role.role_per',[
            'title'=>'角色添加权限页面',
            'rname'=>$role_name,
            'permission'=>$permission,
            'parr'=>$parr


        ]);
    }

    /**
    *    处理角色权限方法
    *
    *   @return \Illuminate\Http\Response
    */
    public function do_role_per(Request $request)
    {
        //获取角色id
        $role_id = $request->input('id');

        //获取权限id
        $per_id = $request->input('per_id');

        //删除角色原来的权限
        DB::table('role_permission')->where('role_id',$role_id)->delete();

        $role_per= [];
        foreach($per_id as $k => $v){
            $rp = [];
            $rp['role_id'] = $role_id;
            $rp['permission_id'] = $v;

            $role_per[] = $rp;
        }

        //往数据表里面添加数据   user_role
        $data = DB::table('role_permission')->insert($role_per);

        if($data){

            return redirect('/admins/role');
        } else {

            return back();
        }


    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $res = Role::get();
        // dump($res);
        return view('admin.role.index',['title'=>'管理角色','res'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.role.add',['title'=>'添加角色']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $rs = $request->except('_token');
        try{
           
            $data = Role::create($rs);

            if($data){

                return redirect('/admins/role')->with('success','添加成功');
            }
        }catch(\Exception $e){

            return back()->with('error','添加失败');

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
         $res = Role::find($id);
        return view('admin.role.edit',['title'=>'角色的修改页面','res'=>$res]);
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
         $rs = $request->except('_token','_method');

        try{
           
            $data = Role::where('id',$id)->update($rs);
            

            if($data){

                return redirect('/admins/role')->with('success','修改成功');
            }
        }catch(\Exception $e){

            return back()->with('error','修改失败');

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
        $res = Role::where('id',$id)->delete();
        //   return($re);
       //    0表示成功 其他表示失败
        if($res){
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
}
