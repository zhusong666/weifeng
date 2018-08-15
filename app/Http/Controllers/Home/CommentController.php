<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
    	return view('home.comment.comment');
    }

    public function create()
    {
    	return view('home.comment.create');
    }
}
