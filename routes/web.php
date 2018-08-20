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
//威锋网后台  
Route::group(['middleware'=>'login'],function(){
//后台首页
Route::get('/admin/index', function () {
    return view('admin.layouts.default');
});
	
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
//角色管理
Route::resource('/admins/role','Admin\RoleController');
Route::any('/admins/role_per/{id}','Admin\RoleController@role_per');
Route::any('/admins/do_role_per','Admin\RoleController@do_role_per');

//权限管理
Route::resource('/admins/permission','Admin\PermissionController');
//用户管理
Route::any('/admin/user_role/{id}','Admin\UserController@user_role');
Route::any('/admin/do_user_role','Admin\UserController@do_user_role');




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
// 商品搜索
Route::get('/home/search','Home\SearchController@search');

// 搜索分类下的商品
Route::get('/home/dosearch','Home\SearchController@dosearch');
//商品详情
Route::get('/home/details/{id}','Home\GoodsController@details');
//显示购物车页
Route::get('/home/cart','Home\CartController@index');
//商品加入购物车
Route::any('/home/addcart/{id}','Home\CartController@addcart');
//删除购物车商品
Route::any('/home/del/{id}','Home\CartController@delete');
// 购物车提交
Route::any('/home/ajaxcart','Home\CartController@ajaxcart');
//购物车提交
Route::any('/home/order','Home\CartController@order');
//购物车结算
Route::any('/home/count','Home\CartController@count');






//前台登录

Route::any('/login','Home\LoginController@login');
Route::any('/dologin','Home\LoginController@dologin');
Route::any('/captcha','Home\LoginController@getCaptcha');
//登录ajax 查询用户名
Route::any('/checkname','Home\LoginController@checkname');
Route::any('/home/captcha','Home\LoginController@captcha');
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

//用户详情
	Route::any('/user/details','Home\UserController@details');
//用户详情修改
	Route::any('/user/doedit/{id}','Home\UserController@update');
//用户收货地址
	Route::any('/user/address','Home\UserController@address');
//用户个人订单
	Route::any('/user/order','Home\UserController@order');
//订单支付
	Route::any('/user/pay','Home\OrderController@pay');
//支付成功
	Route::any('/user/success/{id}','Home\OrderController@success');
//收货
	Route::any('/user/paysuccess','Home\OrderController@paysuccess');

//帮助模块
Route::resource('/home/help','Home\HelpController');
//评论模块
Route::resource('/comments','Home\CommentController');


});






