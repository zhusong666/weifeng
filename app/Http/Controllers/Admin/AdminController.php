<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Admin\Goods;
class AdminController extends Controller
{	

     public function status(Request $request,$id)
    {
        // $status = $request->get('status');
        $result = Goods::where('goods_id',$id)->first();
        $status = $result->goods_status;

        if($status=='2'){
            $result = Goods::where('goods_id',$id)->update(['goods_status'=>3]);
        } else if($status=='3'){
            $result = Goods::where('goods_id',$id)->update(['goods_status'=>2]);
        } else if($status=='1'){
        	$result = Goods::where('goods_id',$id)->update(['goods_status'=>2]);
        }
      

       if($result){
            $data = [
                'status'=>0,
                'msg'=>'操作成功！'
            ];
           return $data;   
        }
          
        
    }


      public function index(Request $request)
    {
        
        return view('home.index');
          
        
    }
}
