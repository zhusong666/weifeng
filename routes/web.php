<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.layouts.default');
});

Route::get('/article/list', function () {
    return view('admin.article.list');
});



//威锋网后台
Route::group([],function(){
//分类管理
Route::resource('/admin/category','Admin\CategoryController');
// 用户后台路由
Route::resource('/admin/user','Admin\UserController');
//商品路由
Route::resource('/admins/goods','Admin\GoodsController');
});






