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
    return view('home');
});
// 专题
Route::get('/thematic', function () {
    return view('thematic.default');
});
// 详情页
Route::get('/detail', function () {
    return view('details.default');
});
