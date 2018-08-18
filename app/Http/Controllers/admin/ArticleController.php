<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Admin\Article;
use App\Model\Admin\Article_cates;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $res = DB::select("select * from wf_article");

        // $res = Article_cates::find(2);

        // $res->articlecate_id;

        // $rs = $res->article_cates;

        // dump($rs);   

         // $result = Article_cates::all()->toArray();

         // foreach ($result as $key => $value) {
         //     $res[$key] = Article_cates::find($value['articlecate_id']);
         //     $rs[$key] = $res[$key]->article_cates->toArray();
         //     foreach ($rs[$key] as $k => $v) {
         //         $rs[$key][$k]['articlecate_name'] = $value['articlecate_name'];
         //     }
             
         // }

        //总结性操作
        $data = Article::with('cate')->paginate(5);

        return view('admin.article.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // echo '111';//日常测试
        //添加分类
        // $res = DB::raw('*,concat(articlecate_id,article_id) as articlecate_id')
        //  ->orderBy('articlecate_id')
        //  ->get();

        // foreach ($res as $key => $value){
        //     //根据path进行缩进
        //     $len = substr_count($value->article_path,',')-1;
        //     $value->article_name=str_repeat('--',$len).$value->article_name;
        // }
        
        return view('admin.article.add'/*,['res' => $res]*/);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //表单验证
        $this->validate($request, [
            'article_title' => 'required|max:255',
            'article_content' => 'required',
        ],[
            'article_name.required'=>'帮助名称不能为空',
            'article_content.required'=>'帮助内容不能为空'
        ]);

        // // 接收表单传入的值  由于是get传值
        $res = $request->except('_token');
        // dump($res);//检查表单值是否接收到

        // echo '111'; 

        //把值传入数据库中
        $date = DB::table('wf_article')->insert($res);

        if($date){
            return redirect('admin/article');
        }else{
            return redirect('admin/article/create');
        }
        // echo '1111';
        
        
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
        $res = DB::table('wf_article')->where('article_id',$id)->first();

        return view ('admin.article.edit',['res'=>$res]);
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
        // 接收在页面修改后的数据
    
        $res = $request->except('_token','_method');

        // dd($res);
        //把数据插入数据库

        $date = DB::table('wf_article')->where('article_id',$id)->update($res);

        if($date){
            return redirect('admin/article');
        }else{
            return redirect('admin/article/edit');
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
        //根据修改页面传回要删除的id
        $res = DB::table('wf_article')->where('article_id',$id)->delete();
        // dump($res);
        
        if($res){

                return redirect('/admin/article');
            }else{
        

            return back()->with('error','删除失败');
            }
    }
}
