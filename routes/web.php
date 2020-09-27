<?php

use Illuminate\Support\Facades\Route;

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
    return view('homepage');
});

Route::get('/product', 'ProductController@index');

Route::get('/product/create','ProductController@create');

Route::post('/product/store','ProductController@store');

Route::get('/product/remove/{id}','ProductController@delete');

Route::get('/product/edit/{id}', 'ProductController@edit');

Route::put('/product/update/{id}', 'ProductController@update');

Route::get('/product/search', 'ProductController@search');


Route::get('/delivery','DeliveryController@index');

Route::get('/delivery/create','DeliveryController@create');

Route::post('/delivery/store', 'DeliveryController@store');

Route::get('/delivery/edit/{id}', 'DeliveryController@edit');

Route::put('/delivery/update/{id}', 'DeliveryController@update');

Route::get('/delivery/remove/{id}','DeliveryController@delete');

Route::get('/delivery/search', 'DeliveryController@search');


Route::get('/member','MemberController@index');

Route::get('/member/create', 'MemberController@create');

Route::post('/member/store', 'MemberController@store');

Route::get('/member/edit/{id}', 'MemberController@edit');

Route::put('/member/update/{id}', 'MemberController@update');

Route::get('/member/remove/{id}','MemberController@delete');

Route::get('/member/search', 'MemberController@search');
