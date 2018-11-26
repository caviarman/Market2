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

Route::get('/logs', 'LogController@index')->name('logs.index');
Route::get('/logs/create', 'LogController@create')->name('logs.create');
Route::post('/logs', 'LogController@store')->name('logs.store');
Route::get('/logs/{id}', 'LogController@show')->name('logs.show');
Route::get('/logs/{id}/edit', 'LogController@edit')->name('logs.edit');
Route::patch('/logs/{id}', 'LogController@update')->name('logs.update');
Route::delete('/logs/{id}', 'LogController@destroy')->name('logs.delete');

Route::get('/category/create', 'CategoryController@create')->name('category.create');
Route::get('/category', 'CategoryController@index')->name('category.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
