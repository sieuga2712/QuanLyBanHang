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
Route::get('/fillter_price/{min}/{max}','SanPhamController@fillter_price');
Route::get('/tao','SanPhamController@view');
Route::get('/update','SanPhamController@upda');
Route::get('/taokk','KhuyenmaiController@view');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/listcart', 'listcart@view');
Route::get('/addcart/{id}','CartController@addcart');
Route::get('/delcart/{id}','CartController@deletecart');
Route::get('/descart/{id}','CartController@descart');
Route::get('/ascscart/{id}','CartController@asccart');


Route::get('/viewcart','CartController@viewcart');
Route::get('/search/{inf}', 'SanPhamController@search')->name('search');
Route::get('/shoppingdelcart/{id}','listcart@deletecart');
Route::get('/shoppingdescart/{id}','listcart@descart');
Route::get('/shoppingasccart/{id}','listcart@asccart');
Route::get('/shoppingChangeinput/{id}/{value}','listcart@changequanty');
Route::get('/thanhtoan','thanhtoancontroller@view');
Route::post('/taodonhang','thanhtoancontroller@create_hoadon');

//Route::get('/{mahang}-{id}', 'SanPhamController@detail')->name('detail');
Route::get('/chi-tiet/{id}', 'SanPhamController@detail')->name('detail');
Route::get('/{maloaihang}/{manhasanxuat}', 'SanPhamController@index')->name('index');
Route::get('/{maloaihang}', 'SanPhamController@indexs')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

/*
Route::get('/1',function(){
    $result=App\Models\sanpham::all()->toArray();
    echo "<pre>";
    print_r($result);
    
    
});
*/
//Route::get('/','ItemMenuController@view');

// lay ban ghi theo id: db::table('user')->where('id',1)
// lay ban ghi theo truong: db::table('user')->where('name',"asdasd")
// lay 1 truong nhat dinh cua 1 ban ghi: db::table('user')->where('id',1)->value("email");
// lay 1 truong nhat dinh cua tat ca ban ghi: db::table('user')->first("email");