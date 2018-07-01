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
    return view('welcome');
});
Route::get('/test',function(){
	return view('admin.product.list');
});
Route::get('/order',function(){
	return view('admin.order.list');
});
Route::get('add',function(){
	return view('admin.product.add');
});
Route::get('card',function(){
	return view('admin.card.add');
});
Route::post('card/add','CardController@create');
