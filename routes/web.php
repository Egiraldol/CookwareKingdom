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
Route::get('/reviews/create/{product_id}', 'App\Http\Controllers\ReviewController@create')->name('review.create');
Route::post('/reviews/save', 'App\Http\Controllers\ReviewController@save')->name('review.save');
Route::get('/reviews/{id}', 'App\Http\Controllers\ReviewController@show')->name('review.show');
Route::delete('/reviews/{id}', 'App\Http\Controllers\ReviewController@delete')->name('review.delete');

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');

Route::get('/recipes', 'App\Http\Controllers\RecipeController@index')->name('recipe.index');
Route::get('/recipes/create', 'App\Http\Controllers\RecipeController@create')->name('recipe.create');
Route::post('/recipes/save', 'App\Http\Controllers\RecipeController@save')->name('recipe.save');
Route::get('/recipes/{id}', 'App\Http\Controllers\RecipeController@show')->name('recipe.show');
Route::delete('/recipes/{id}', 'App\Http\Controllers\RecipeController@delete')->name('recipe.delete');

Route::get('/orderProducts', 'App\Http\Controllers\OrderProductController@index')->name('orderProduct.index');
Route::get('/orderProducts/create', 'App\Http\Controllers\OrderProductController@create')->name('orderProduct.create');
Route::post('/orderProducts/save', 'App\Http\Controllers\OrderProductController@save')->name('orderProduct.save');
Route::get('/orderProducts/{id}', 'App\Http\Controllers\OrderProductController@show')->name('orderProduct.show');
Route::delete('/orderProducts/{id}', 'App\Http\Controllers\OrderProductController@delete')->name('orderProduct.delete');
Auth::routes();

Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");
Route::post('/admin/products/store', 'App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");
Route::delete('/admin/products/{id}/delete','App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete"); 
Route::get('/admin/products/{id}/edit','App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit"); 
Route::put('/admin/products/{id}/update','App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.index');
Route::get('/cart/delete', 'App\Http\Controllers\CartController@delete')->name('cart.delete');
Route::post('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name('cart.add');
