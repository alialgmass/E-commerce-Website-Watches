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
    Route::get('/cart/create/{id}', [CartController::class,'create'])->name('add-in-cart'); 
    Route::get('/cart/', [CartController::class,'index'])->name('cart-index'); 
    Route::post('/cart/store', [CartController::class,'store'])->name('cart-store');  

});

//order
Route::group(['middleware'=>'auth'],function () {
    Route::get('/checkout/', [OrderController::class,'checkout'])->name('checkout'); 
    Route::post('/order', [OrderController::class,'store'])->name('add-in-order');
});




Auth::routes();