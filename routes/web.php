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



Route::get('/products', 'ProductController@index')->name('products');
Route::get('/voucher/{product_id}','ProductController@voucher')->name('voucher');
Route::get('/checkout/{product_id}', 'ProductController@checkout')->name('checkout');

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

Route::get('chart', 'ChartController@index');


Route::resource('clients', 'ClientController');
Route::resource('files', 'FileController');


