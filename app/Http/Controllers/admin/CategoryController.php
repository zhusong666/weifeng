<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Category;//引入模型
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //显示页遍历需要后台先查数据
        $res = Category::select(DB::raw('*,concat(cate_path,cate_id) as cate_paths'))
         ->where('cate_name','like','%'.$request->input('cate_name').'%')
         ->orderBy('cate_paths')
         ->paginate($request->input('num',10));

        foreach ($res as $key => $value){
            //根据path进行缩进
            $len = substr_count($value->cate_path,',')-1;
            $value->cate_name=str_repeat('|----',$len).$value->cate_name;
        }

        return view('admin.category.index',[
            'title'=>'分类列表页',
            'request'=> $request,
            'res'=>$res

            ]);
        // echo '111';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $res = Category::all(); //获取已添加的所有数值
        //需要缩进
        //需要把上述拆分成 一级二级分类
// 
        $res = Category::select(DB::raw('*,concat(cate_path,cate_id) as cate_paths'))
         ->orderBy('cate_paths')
         ->get();

        foreach ($res as $key => $value){
            //根据path进行缩进
            $len = substr_count($value->cate_path,',')-1;
            $value->cate_name=str_repeat('|----',$len).$value->cate_name;
        }

        return view('admin.category.add',[
            'title'=>'分类的添加页面',
            'res'=> $res
        ]);
        // echo'111';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dump($request->all());//测试值是否传过来
        // echo'111';测试是否通畅
        $res = $request->except('_token');
                            //基本知识 : 这个整体是一个类 现在是在一个方法里去调用除了 (except) 字段_token 以外得字段
        if($request->input('cate_pid')=='0'){
            $res['cate_path']='0,';
        } else{
            $data = Category::where('cate_id',$request->input('cate_pid'))->first();
                $res['cate_path'] = $data->cate_path.$data->cate_id.',';
        }
            // Category::create($res);
            // echo  12345;
            //判断值是否可以写入数据库

        try{
           
            $rs = Category::create($res);

            if($rs){

                return redirect('/admin/category')->with('success','添加成功');
            }
        }catch(\Exception $e){

            return back()->with('error','添加失败');

        }//模型处理判断 判断是否异常

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
        // echo'111';//日常测试路由通没通

        $res = Category::where('cate_id',$id)->first();

       

        $info = Category::select(DB::raw('*,concat(cate_path,cate_id) as cate_paths'))
         ->orderBy('cate_paths')
         ->get();

        foreach ($info as $key => $value){
            //根据path进行缩进
            $len = substr_count($value->cate_path,',')-1;
            $value->cate_name=str_repeat('|----',$len).$value->cate_name;
        }

        return view('admin.category.edit',[
            'title'=>'分类的修改页面',
            'res'=>$res,
            'info'=>$info
            ]);
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
        $res = $request->only('cate_status','cate_name');

        try{
           
            $data = Category::where('cate_id',$id)->update($res);

            if($data){

                return redirect('/admin/category')->with('success','修改成功');
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

        // echo $id;die;

        // 根据id 查找自己底下有没有其他的类别
        $res = Category::where('cate_id',$id)->first();

        // dump ($res);


        $path = $res->cate_path.$res->cate_id.',';  //0,1,5,

        // dump ($path);

        //如果找到底下有其他的类别 删除
        $data = Category::where('cate_path','like','%'.$path.'%')->delete();
      

         try{
           
            //还要根据id删除自己
            $rs = Category::where('cate_id',$id)->delete();

            if($rs){

                return redirect('/admin/category')->with('success','删除成功');
            }
        }catch(\Exception $e){

            return back()->with('error','删除失败');

        }

    }
}
