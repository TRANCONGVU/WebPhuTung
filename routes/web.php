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


Route::get('trang-chu', [
	'as' =>'trang-chu',
	'uses' => 'Controller_1@get_trangchu'
]);
Route::get('tintuc', [
	'as' =>'tintuc',
	'uses' => 'Controller_1@get_tintuc'
]);
Route::get('khuyenmai', [
	'as' =>'kkhuyenmai',
	'uses' => 'Controller_1@get_khuyenmai'
]);

Route::get('gioithieu', [
	'as' =>'gioithieu',
	'uses' => 'Controller_1@get_gioithieu'
]);


Route::get('sanpham', [
	'as' =>'sanpham',
	'uses' => 'Controller_1@get_sanpham'
]);

// Sơn
Route::prefix('chinh-sach-hoat-dong')->group(function () {
  Route::get('bao-hanh-bao-tri', function () {
      return view('pages.baohanhbaotri');
  })->name('bao-hanh-bao-tri');
});
Route::get('aaa', function(){
  return view('pages.lienhe');
});

