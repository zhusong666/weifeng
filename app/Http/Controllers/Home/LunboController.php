<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class LunboController extends Controller
{
	public function lunbo ()
	{
		$res = DB::table('wf_lunbo')->get();
		dd($res);

		return view('home.Lunbo.index',['res'=>$res]);
	}
}
