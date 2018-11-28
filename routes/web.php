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

Route::get('/test', 'SaleController@testshow')->name('test.show');
Route::post('/test', 'SaleController@test')->name('test.test');

Route::get('/sales', 'SaleController@index')->name('sales.index');
Route::get('/sales/create', 'SaleController@create')->name('sales.create');
Route::get('/sales/{id}', 'SaleController@show')->name('sales.show');
Route::post('/sales', 'SaleController@store')->name('sales.store');
Route::get('/sales/{id}/edit', 'SaleController@edit')->name('sales.edit');
Route::patch('/sales/{id}', 'SaleController@update')->name('sales.update');
Route::delete('/sales/{id}', 'SaleController@destroy')->name('sales.delete');

Route::get('/goods', 'GoodController@index')->name('goods.index');
Route::get('/goods/create', 'GoodController@create')->name('goods.create');
Route::get('/goods/{id}', 'GoodController@show')->name('goods.show');
Route::post('/goods', 'GoodController@store')->name('goods.store');
Route::get('/goods/{id}/edit', 'GoodController@edit')->name('goods.edit');
Route::patch('/goods/{id}', 'GoodController@update')->name('goods.update');
Route::delete('/goods/{id}', 'GoodController@destroy')->name('goods.delete');

Route::get('/logs', 'LogController@index')->name('logs.index');
Route::get('/logs/create', 'LogController@create')->name('logs.create');
Route::post('/logs', 'LogController@store')->name('logs.store');
Route::get('/logs/{id}', 'LogController@show')->name('logs.show');
Route::get('/logs/{id}/edit', 'LogController@edit')->name('logs.edit');
Route::patch('/logs/{id}', 'LogController@update')->name('logs.update');
Route::delete('/logs/{id}', 'LogController@destroy')->name('logs.delete');

Route::get('/category', 'CategoryController@index')->name('category.index');
Route::get('/category/create', 'CategoryController@create')->name('category.create');
Route::post('/category', 'CategoryController@store')->name('category.store');
Route::get('/category/{id}/edit', 'CategoryController@edit')->name('category.edit');
Route::patch('/category/{id}', 'CategoryController@update')->name('category.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
