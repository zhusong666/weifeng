<?php


class ElseController extends Controller
{
	public function show($id)
	{
		$result = DB::table('category')->where('cid',$id)->first();
		
		return view('admin.index',['result'=>$result]);
	}
}