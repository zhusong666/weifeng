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
Route::any('/login','Home\LoginController@login');
Route::any('/dologin','Home\LoginController@dologin');
Route::any('/captcha','Home\LoginController@getCaptcha');
//登录ajax 查询用户名
Route::any('/checkname','Home\LoginController@checkname');
//退出
Route::any('/logout','Home\LoginController@logout');
//注册
Route::any('/register','Home\RegisterController@register');
Route::any('/doregister','Home\RegisterController@doregister');
//注册ajax验证
Route::any('/checkuser','Home\RegisterController@checkuser');
//邮箱激活
Route::any('/jihuo','Home\RegisterController@jihuo');
Route::any('/tixing','Home\RegisterController@tixing');
//忘记密码(输入用户名.邮箱验证)
Route::any('/editpass','Home\LoginController@editpass');
//处理验证
Route::any('/doeditpass','Home\LoginController@doeditpass');
//输入新密码
Route::any('/repass','Home\LoginController@repass');
Route::any('/dorepass','Home\LoginController@dorepass');

//商品列表
Route::any('goodlist/{id}','GoodController@goodList');

});






