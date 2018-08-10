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



Route::get('/article/list', function () {
    return view('admin.article.list');
});


//登录模块
Route::any('/admin/login','Admin\LoginController@login');
Route::any('/admin/dologin','Admin\LoginController@dologin');
Route::any('/admin/captcha','Admin\LoginController@captcha');
//威锋网后台  'middleware'=>'login'
Route::group([],function(){
//退出
Route::any('/admin/logout', 'Admin\LoginController@logout');	
// 用户状态
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

//轮播图管理
Route::resource('/admin/lunbo','Admin\LunboController');

//订单管理
Route::any('/admin/order','Admin\OrderController@index');
//订单状态(发货,收货,完成)
Route::any('/admin/dset/{id}','Admin\OrderController@dset');
//订单详情
Route::any('/admin/detail/{id}','Admin\OrderController@detail');

//后台路由(商品上架下架)
Route::any('/admin/status/{id}','Admin\AdminController@status');
});

//网站前台
Route::group([],function(){
//前台首页
Route::any('/','Home\IndexController@index');
//前台登录
Route::any('/home/login','Home\IndexController@login');
//商品列表
Route::any('goodlist/{id}','GoodController@goodList');

});






