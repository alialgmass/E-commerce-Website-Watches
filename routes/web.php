<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
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
//products
Route::get('/', [ProductController::class,'index'])->name('index');
Route::group(['middleware'=>'auth'],function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product/{id}', [ProductController::class,'show'])->name('show-product');
Route::get('/product', [ProductController::class,'all_prouduct'])->name('show-all-product');
});

//cart
Route::group(['middleware'=>'auth'],function () {
    Route::post('/cart/{id}', [OrderController::class,'create'])->name('add-in-cart');  
});

//order
Route::group(['middleware'=>'auth'],function () {
    Route::post('/order', [OrderController::class,'store'])->name('add-in-order');
});




Auth::routes();