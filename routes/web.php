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

  Route::get('quy-dinh-chung', function () {
      return view('pages.quydinhchung');
  })->name('quy-dinh-chung');

  Route::get('bao-hanh-bao-tri', function () {
      return view('pages.baohanhbaotri');
  })->name('bao-hanh-bao-tri');

  Route::get('bao-mat-thong-tin', function () {
    return view('pages.baohanhbaotri');
  })->name('bao-mat-thong-tin');

  Route::get('van-chuyen', function(){
    return view('pages.vanchuyen');
  })->name('van-chuyen');

  Route::get('thanh-toan', function(){
    return view('pages.thanhtoan');
  })->name('thanh-toan');

});
  
Route::get('he-thong-tram-hcm', function () {
    return view('pages.hethongtramhcm');
})->name('he-thong-tram-hcm');

Route::get('he-thong-tram-hn', function () {
    return view('pages.hethongtramhn');
})->name('he-thong-tram-hn');

Route::get('lien-he', function () {
  return view('pages.lienhe');
})->name('lien-he');



