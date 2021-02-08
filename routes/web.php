<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
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
//Homepage
Route::get('/', [HomeController::class, 'homepage']);

//Catatogue
Route::get('/product', [ProductController::class, 'product_list']);

//Page product
Route::get('/product/{id}',[ProductController::class, 'product_details']);

//page panier
Route::get('/cart', [CartController::class, 'cart']);

