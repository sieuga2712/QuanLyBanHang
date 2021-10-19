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

    return view('home');
});

Auth::routes();
Route::get('/tao','ControllerSanPham@view');
Route::get('/taokk','KhuyenmaiController@view');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/1',function(){
    $result=App\Models\sanpham::all()->toArray();
    echo "<pre>";
    print_r($result);
    
    
});
Route::get('/','ItemMenuController@view');
// lay ban ghi theo id: db::table('user')->where('id',1)
// lay ban ghi theo truong: db::table('user')->where('name',"asdasd")
// lay 1 truong nhat dinh cua 1 ban ghi: db::table('user')->where('id',1)->value("email");
// lay 1 truong nhat dinh cua tat ca ban ghi: db::table('user')->first("email");