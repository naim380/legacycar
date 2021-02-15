<?php

use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConditionController;
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
Route::get('/product/sortbyname', [ProductController::class, 'sortbyname']);
Route::get('/product/sortbyprice', [ProductController::class, 'sortbyprice']);
//Page product
Route::get('/product/{id}',[ProductController::class, 'product_details']);

//page panier
Route::get('/cart', [CartController::class, 'cart']);
//back office
Route::get('/formulaire', [BackofficeController::class, 'formulaire']);
Route::post('/validate',[BackofficeController::class,'validation']);

Route::delete('/delete/{id}', [BackofficeController::class, 'delete']);
Route::get('/backoffice',[BackofficeController::class, 'backoffice'])->name("backoffice");
Route::get('/formulaire', [BackofficeController::class, 'formulaire']);
Route::put('/modifier/{id}',[BackofficeController::class,'modifier']);

Route::get('/modifier/{id}',[BackofficeController::class,'affichage']);

Route::get('/condition',[ConditionController::class,'affichage']);
Route::post('/condition',[ConditionController::class,'condition']);
