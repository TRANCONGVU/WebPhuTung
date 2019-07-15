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

Route::get('/', function() {
	return view('admin.index');
});
//Route::get('/', function() {
//    return view('admin.index');
//});

Route::prefix('tin-tuc-su-kien')->group(function () {

  Route::get('/', function() {
    return view('pages.tintucsukien');
  })->name('tin-tuc-su-kien');

  Route::get('khuyen-mai', function() {
    return view('pages.khuyenmai');
  })->name('khuyen-mai');

});

Route::prefix('chinh-sach-hoat-dong')->group(function () {

  Route::get('/', function () {
    return view('pages.chinhsachhoatdong');
  })->name('chinh-sach-hoat-dong');

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

/*
 * Làm quyền Admin
 * */
//Đăng nhập admin
Route::prefix('users')->group(function ()
{
//    Route::get('/','Auth\Admin\LoginController@getlogin')->name('admin.login');
    Route::get('/', 'Auth\Admin\AdminController@index')->name('admin.index');
    Route::get('login','Auth\Admin\LoginController@getlogin')->name('admin.login.get');

    Route::post('login','Auth\Admin\LoginController@postlogin')->name('admin.login.post');
    Route::post('account','Auth\Admin\AccountController@postAccount')->name('admin.account.post');

});
