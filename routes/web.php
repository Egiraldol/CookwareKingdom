<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/reviews', 'App\Http\Controllers\ReviewController@index')->name('review.index');
Route::get('/reviews/create', 'App\Http\Controllers\ReviewController@create')->name('review.create');
Route::post('/reviews/save', 'App\Http\Controllers\ReviewController@save')->name('review.save');
Route::get('/reviews/{id}', 'App\Http\Controllers\ReviewController@show')->name('review.show');
Route::delete('/reviews/{id}', 'App\Http\Controllers\ReviewController@delete')->name('review.delete');

Route::get('/products','App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/products/create','App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/products/save','App\Http\Controllers\ProductController@save')->name('product.save');
Route::get('/products/{id}','App\Http\Controllers\ProductController@show')->name('product.show');
Route::delete('/products/{id}', 'App\Http\Controllers\ProductController@delete')->name('product.delete');

Route::get('/orderProducts','App\Http\Controllers\OrderProductController@index')->name('orderProduct.index');
Route::get('/orderProducts/create','App\Http\Controllers\OrderProductController@create')->name('orderProduct.create');
Route::post('/orderProducts/save','App\Http\Controllers\OrderProductController@save')->name('orderProduct.save');
Route::get('/orderProducts/{id}','App\Http\Controllers\OrderProductController@show')->name('orderProduct.show');
Route::delete('/orderProducts/{id}', 'App\Http\Controllers\OrderProductController@delete')->name('orderProduct.delete');