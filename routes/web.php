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
    return view('main');
})->name('home');

Route::resource('admins','AdminController');
//Route::get('admins','Admin')

Route::get('/admins','AdminController@index')->name('admin2');
Route::post('/admins/store','AdminController@store')->name('store');
Route::post('/admins/check','AdminController@checkmail')->name('chk');
Route::get('/show/{id}','AdminController@show')->name('show');
Route::get('/show-all','AdminController@showall')->name('sall');
Route::get('/show-users','UserController@showall')->name('users_all');
Route::get('/edit/{id}','AdminController@edit')->name('aedit');
Route::post('update/{id}','AdminController@update')->name('aupdate');
Route::get('/delete/{admin}','AdminController@destroy')->name('adelete');
Route::get('/ausers/{id}','AdminController@show')->name('ausers');
Route::get('/asignin',function(){return view('asignin');})->name('asignin');
Route::get('/asignup',function(){return view('asignup');})->name('asignup');


Route::get('order','OrderController@index')->name('orders');
Route::post('order/check_coupon','OrderController@check_coupon')->name('check_coupon');
Route::post('orders/create/{id}/{id2}','OrderController@create')->name('create_order');
Route::get('orders/check/{id}','OrderController@check')->name('check_order');
Route::get('orders/delete/{order}','OrderController@destroy')->name('order_del');


Route::get('users/logout','UserController@logout')->name('logout');
Route::post('users/store','UserController@store')->name('user_store');
Route::post('users/chk','UserController@check')->name('ulogin');

Route::post('box_clothes/store','BoxClothController@store')->name('b_cloth_store');
Route::get('box_clothes/index','BoxClothController@index')->name('b_cloth_showall');
Route::get('box_clothes/Show','BoxClothController@show')->name('b_cloth_add');
Route::post('box_clothes/del/{id}','BoxClothController@destroy')->name('b_cloth_delete');

Route::get('ath_trackers/index','Ath_trackers_Controller@index')->name('a_trackers_showall');
Route::post('ath_trackers/store','Ath_trackers_Controller@store')->name('a_trackers_store');
Route::post('ath_trackers/del/{id}','Ath_trackers_Controller@destroy')->name('a_trackers_delete');
Route::get('ath_trackers/Show','Ath_trackers_Controller@show')->name('a_trackers_add');



Route::get('c_bat_quip/index','CBattingEquipmentController@index')->name('c_bat_quip_showall');
Route::post('c_bat_quip/store','CBattingEquipmentController@store')->name('c_bat_quip_store');
Route::post('c_bat_quip/del/{id}','CBattingEquipmentController@destroy')->name('c_bat_quip_delete');
Route::get('c_bat_quip/Show','CBattingEquipmentController@show')->name('c_bat_quip_add');


Route::get('s_boys_swimwear/index','SBoysSwimwearController@index')->name('s_boys_swimwear_showall');
Route::post('s_boys_swimwear/store','SBoysSwimwearController@store')->name('s_boys_swimwear_store');
Route::post('s_boys_swimwear/del/{id}','SBoysSwimwearController@destroy')->name('s_boys_swimwear_delete');
Route::get('s_boys_swimwear/Show','SBoysSwimwearController@show')->name('s_boys_swimwear_add');