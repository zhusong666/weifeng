<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Home\Address;

class AddressController extends Controller
{
    public function index()
    {
    	$uid = session('user_id');
    	$res = Address::where('uid',$uid)->get();

    	// dump($res);

        foreach($res as $k=>$v){

            $phone = $v->address_phone;

        }

        // dd($phone);
        $nphone = substr_replace($phone,'****',3,4);

    	return view('/home/user/address',['res'=>$res,'nphone'=>$nphone]);
    }

    public function store(Request $request)
    {
    	//添加
    	$res = $request->except('_token');
    	//获取session id
    	$res['uid'] = session('user_id');

    	$data = DB::table('wf_user_address')->insert($res);

    	if($data){

            return redirect('/user/address');
        } else {

         return redirect('/user/address');

        }
    }

    public function edit($id)
    {
    	$res = Address::where('address_id',$id)->first();

    	// dump($res);

        $phone = $res->address_phone;

        $nphone = substr_replace($phone,'****',3,4);

        // dd($nphone);

    	return view('/home/user/upaddress',['res'=>$res,'nphone'=>$nphone]);
    }

    public function update(Request $request,$id)
    {

    	$res = $request->except('_token','_method');
    	// dd($res);

    	$data = Address::where('address_id',$id)->update($res);

    	if($data){

            return redirect('/user/address')->with('success','修改成功');;
        } else {

         return redirect('/user/address')->with('error','修改失败');

        }
    }

    public function destroy($id)
    {
    	$res = DB::table('wf_user_address')->where('address_id',$id)->delete();
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
