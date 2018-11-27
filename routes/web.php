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
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::get('/products/{id}', 'ProductController@show')->name('products.show');
Route::post('/products', 'ProductController@store')->name('products.store');
Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::patch('/products/{id}', 'ProductController@update')->name('products.update');
Route::delete('/products/{id}', 'ProductController@destroy')->name('products.delete');

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
