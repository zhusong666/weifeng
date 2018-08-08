<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    
    public function index()
    {
    	return view('/home/index',['title'=>'前台野兽']);
    }

    public function login()
    {
    	return view('/home/index/login',['title'=>'前台野兽']);
    }
}
