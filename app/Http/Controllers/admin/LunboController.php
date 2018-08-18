<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Config;

class LunboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $res = DB::select("select * from wf_lunbo");
        // echo "11111";
        return view('admin.lunbo.index',[
                 'res'=>$res
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //接收表单传过来的值
        // $res = $request->except('_token');

        return view('admin.lunbo.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        //接收表单传过来的值
        $res = $request->except('_token');

       
        //上传图片
        if($request->hasFile('lunbo_img')){

            //名字
            $name = date('Ymd',time()).rand(111,333);
            //后缀
            $suffix = $request->file('lunbo_img')->getClientOriginalExtension();
            //移动
            $request->file('lunbo_img')->move(Config::get('webconfig.upload'),$name.'.'.$suffix);    

        }
        //保存到数据表中
            $res['lunbo_img']='/uploads/'.$name.'.'.$suffix;

         //把数值传入数据库
        $date = DB::table('wf_lunbo')->insert($res);
         // dump($res);
         // echo '111';

        if($date){
            return redirect('admin/lunbo');
        }else{
            return redirect('admin/lunbo/create');
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
       
        $res = DB::table('wf_lunbo')->where('lunbo_id',$id)->first();

        return view ('admin.lunbo.edit',['res'=>$res]);
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
        $res = $request->except('_token','_method','lunbo_img');

         if($request->hasFile('lunbo_img')){

            //名字
            $name = date('Ymd',time()).rand(111,333);
            //后缀
            $suffix = $request->file('lunbo_img')->getClientOriginalExtension();
            //移动
            $request->file('lunbo_img')->move(Config::get('webconfig.upload'),$name.'.'.$suffix);    

            $res['lunbo_img']='/uploads/'.$name.'.'.$suffix;

        }
        //保存到数据表中
           
        //把数据插入数据库

        $date = DB::table('wf_lunbo')->where('lunbo_id',$id)->update($res);

        if($date){
            return redirect('admin/lunbo');
        }else{
            return redirect('admin/lunbo/edit');
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
        $res = DB::table('wf_lunbo')->where('lunbo_id',$id)->delete();

        if($res){

            return redirect('/admin/lunbo');
        } else {

            return redirect('/admin/lunbo');
            
        }
    }
}
