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

Route::get('/demo', function () {
    return view('welcome');
});
// 首页
Route::get('/', function () {
    return view('home',['nav'=>'home']);
});
// 专题
Route::get('/thematic', function () {
    return view('thematic.default',['nav'=>'thematic']);
});
// 详情页
Route::get('/detail', function () {
    return view('details.default',['nav'=>'detail']);
});

// 登录注册
Route::group(['prefix'=>'user'], function(){
  Route::get('login', function () {
    return view('user.login',['nav'=>'login']);
  });
  Route::get('register', function () {
    return view('user.register',['nav'=>'register']);
  });
  Route::get('forgot', function () {
    return view('user.forgot',['nav'=>'forgot']);
  });
  Route::get('center', function () {
    return view('center.default',['nav'=>'center']);
  });
});

// 写文章
Route::get('/write', function () {
  return view('write.post',['nav'=>'write']);
});

// 编辑器上传图片
Route::get('home/upload', 'HomeController@upload');

