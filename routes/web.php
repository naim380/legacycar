<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BackofficeController;
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
//HOME
Route::get('/', [HomeController::class, 'view'])->name('home');

//PRODUCT
Route::get('/products', [ProductController::class, 'product_list'])->name('produits');
Route::get('/products/sortByName', [ProductController::class, 'product_list_sortByName'])->name('produitsByName');
Route::get('/products/sortByPrice', [ProductController::class, 'product_list_sortByPrice'])->name('produitsByPrice');

//VENDRE
Route::get('/vendresavoiture', [ProductController::class, 'sell_car'])->name('formulaire');

//PRODUCT SELF
Route::get('/product/{car}', [ProductController::class, 'product_details'])->name('product-self');

//PANIER
Route::get('/cart', [CartController::class, 'view'])->name('panier');

//BACKOFFICE
Route::get('/backoffice/', [BackofficeController::class, 'index'])->name('backoffice');
Route::post('/vendresavoiture', [BackofficeController::class, 'addCar'])->name('validation');
Route::get('/backoffice/update/{car}', [BackofficeController::class, 'update'])->name('backUpdate');
Route::put('/backoffice/updated/{car}', [BackofficeController::class, 'updated_car'])->name('backUpdated');
Route::delete('/backoffice/delete/{car}', [BackofficeController::class, 'delete'])->name('backDelete');
