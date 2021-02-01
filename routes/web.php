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

Route::get('/', "App\Http\Controllers\HomeController@homepage"

);
Route::get('/product', "App\Http\Controllers\ProductController@products_list"

);
Route::get('/product/{id}',"App\Http\Controllers\ProductController@product_details"

);
Route::get('/cart', "App\Http\Controllers\CartController@cart"
);
