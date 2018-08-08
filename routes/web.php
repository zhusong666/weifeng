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



Route::any('/admin/login','Admin\LoginController@login');
Route::any('/admin/dologin','Admin\LoginController@dologin');
Route::any('/admin/captcha','Admin\LoginController@captcha');
//威锋网后台  
Route::group(['middleware'=>'login'],function(){
// 用户状态
Route::any('/admin/logout', 'Admin\LoginController@logout');	
//登录模块
Route::any('/admin/up/{id}', 'Admin\LoginController@up');
Route::any('/admin/pass', 'Admin\LoginController@pass');
Route::any('/admin/repass', 'Admin\LoginController@repass');
//分类管理
Route::resource('/admin/category','Admin\CategoryController');
//用户管理
Route::resource('/admin/user','Admin\UserController');
//商品管理
Route::resource('/admins/goods','Admin\GoodsController');

//文章管理
Route::resource('/admin/article','Admin\ArticleController');

//订单管理
Route::any('/admin/order','Admin\OrderController@index');
//订单详情
Route::any('/admin/detail/{id}','Admin\OrderController@detail');

//后台路由(商品上架下架)
Route::any('/admin/status/{id}','Admin\AdminController@status');
});


//前台首页

Route::any('/home/index','Home\IndexController@index');
Route::any('/home/login','Home\IndexController@login');






