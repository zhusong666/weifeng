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

// Route::group([])
Route::resource('/admin/user','Admin\UserController');
