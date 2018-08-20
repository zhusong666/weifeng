<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Admin\CateGory;
use App\Model\Admin\Goods;
use App\Model\Admin\Goods_img;
use App\Model\Admin\Types;
use Config;
class GoodsController extends Controller
{
    /**
     * 查看商品
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        // $goods = DB::table('wf_goods')->get();
        $goods = DB::table('wf_goods')->orderBy('goods_id','asc')
            ->where(function($query) use($request){
                //商品名字查询
                $goods_name = $request->input('goods_name');

                //分类名查询
                $cate_name = $request->input('cate_name');
                //商品名不能为空
                if(!empty($goods_name)) {
                    $query->where('goods_name','like','%'.$goods_name.'%');
                }
                //商品分类名称
                if(!empty($cate_id)) {
                    $query->where('cate_name','like','%'.$cate_name.'%');
                }
                

            })
        ->paginate($request->input('num', 4));
        $res = Category::select(DB::raw('*,concat(cate_path,cate_id) as paths'))->orderBy('paths')->get();
        // $res = Goods::with('CateGory')->where('cate_id',)

        return view('admin.goods.index',['goods'=>$goods,'request'=>$request,'res'=>$res,'title'=>'商品浏览页面']);
    }

    /**
     * 显示添加页
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $res = Category::select(DB::raw('*,concat(cate_path,cate_id) as paths'))->orderBy('paths')->get();

        foreach ($res as $key => $value) {
            // dump($value->catename);
            $len = substr_count($value->cate_path,',')-1;
            //根据path
            $value->cate_name=str_repeat('|--',$len).$value->cate_name;
        }
        return view('admin.goods.add',['res'=>$res,'title'=>'商品添加页面']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $res = $request->except('_token','goods_img');
        //商品
        $good['cates_id'] = $request->input('cate_id');
        $good['goods_name'] = $request->input('goods_name');
        $good['goods_price'] = $request->input('goods_price');
        $good['goods_count'] = $request->input('goods_count');
        $good['goods_selecnt'] = $request->input('goods_selecnt');
        $good['goods_status'] = $request->input('goods_status');
        $good['goods_content'] = $request->input('goods_content');
        $good['goods_time'] = time();
        // dump($good);
        
        //插入时间
        //添加数据
        $res = Goods::create($good);
        $gid = $res->goods_id;
        //商品类型
        $type['gid'] = $gid;
        $type['type_name'] = $request->input('type_name');
        $type['tprice'] = $request->input('tprice');
        $type['colour'] = $request->input('colour');


        $types['gid'] = $gid;
        $types['type_name'] = $request->input('types_name');
        $types['tprice'] = $request->input('tprices');
        $types['colour'] = $request->input('colours');
        if(!empty($types['type_name'])){
            Types::create($types);
            Types::create($type);
        }else{

            Types::create($type);
        }


        if(!$gid){
            return back('/admins/goods/create')->with('error','获取id失败');
        }

        // dump($gid);
        //图片上传
        if($request->hasFile('goods_img')){

            //获取上传图片的数据
           $gs = $request->file('goods_img');
           $gr = [];
           foreach($gs as $k => $v){
                 $gd = [];
                  //gid
                 $gd['good_id'] = $gid;
                 //设置名字
                 $name = str_random(10).time();
                 //获取后缀
                 $suffix = $v->getClientOriginalExtension();
                //移动
                 $v->move(Config::get('webconfig.goodsimg'),$name.'.'.$suffix);
                 //gimg
                 $gd['goods_img'] = '/uploads/goodsimg/'.$name.'.'.$suffix;
                 $gr[] = $gd;
             }         
            
         }

         try{
           
             //添加数据的时候   //模型关系 1对多
             $data = $res->goods_img()->createMany($gr);
             if($data){

                 return redirect('/admins/goods')->with('success','添加成功');
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
         $res = DB::table('wf_goods')->where('goods_id',$id)->first();
        return view('admin.goods.edit',['title'=>'商品修改页面','res'=>$res]);
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
       //将修改的数据发送到该方法中，去除csrf的验证字段，为了将信息分开发送，先把图片分离出来
        $res = $request->except('_token','goods_img','_method');
        //添加单纯的商品数据到goods商品表
        Goods::where('goods_id',$id)->update($res);

        Goods_img::where('good_id',$id)->delete();

        // // dump($img);
        
        //查询修改后新增的商品数据，根据该商品的gid匹配关联图片的关联字段，使两者相等
        $result = Goods::where('goods_id',$id)->first();
        $gid = $result->goods_id;
        //图片上传
        if($request->hasFile('goods_img')){

            //获取上传图片的数据
           $gs = $request->file('goods_img');
           $gr = [];
           foreach($gs as $k => $v){

                 $gd = [];

                  //gid
                 $gd['good_id'] = $gid;
                 
                 //设置名字
                 $name = str_random(10).time();

                 //获取后缀
                 $suffix = $v->getClientOriginalExtension();

                //移动
                 $v->move(Config::get('webconfig.goodsimg'),$name.'.'.$suffix);

                 //gimg
                 $gd['goods_img'] = '/uploads/goodsimg/'.$name.'.'.$suffix;

                 $gr[] = $gd;
             }         
            
         }

        try{
            //将图片的数组数据写入数据库，因为在前台js删除原有的数据，这里等于重新写入
             // $data = DB::table('wf_goods_img')->where('good_id',$id)->update($arr);
            // $data = Goods_img::where('good_id',$id)->update($arr);
            // $data = $res->goodsmany()->createMany($arr);
            $data = DB::table('wf_goods_img')->insert($gr);
            if($data){
                return redirect('/admins/goods')->with('success','修改成功');
            }
        }catch(\Exception $e){
            return back();
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
        // // 商品详情图片删除
        // $img = DB::table('wf_goods')->where('gooods_id',$id)->first();
        // // dump($img);
        // $name = $img[0]->goods_content;
        // if(!empty($name)){
        //     $name = '.'.$name;
        //     unlink($name);
        // }
        // //商品图片删除
        // $imgs = DB::table('wf_goods_img')->where('gooodsimg_id',$id)->first();
        // // dump($img);
        // $nam = $imgs[0]->goods_img;
        // if(!empty($name1)){
        //     $nam = '.'.$nam;
        //     unlink($nam);
        // }

        //删除对应id的商品
        $re =  Goods::where('goods_id',$id)->delete();
        $res = Goods_img::where('good_id',$id)->delete();
        //   return($re);
       //    0表示成功 其他表示失败
        if($re){
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
