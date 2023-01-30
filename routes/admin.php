<?php
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

################# Login Routs ###################
Route::group(['middleware'=>'guest:admin' ,'namespace'=>'App\Http\Controllers\Admin'],function(){

    Route::get('login','LoginController@index');
    Route::post('login','LoginController@login')->name('admin.login');
});
############## End  Login Routs #################

################# home Routs ###################
Route::group(['middleware'=>'auth:admin' ,'namespace'=>'App\Http\Controllers\Admin'],function(){
    //dashbourd
    Route::get('/','AdminController@index')->name('admin');
    //logout
    Route::get('logout','AdminController@logout');});
    ####################End home#######################
    ################# product Routs ###################
Route::group(['middleware'=>'auth:admin' ,'namespace'=>'App\Http\Controllers\Admin'],function(){
    //dashbourd
    Route::get('/product','ProductController@index')->name('admin.product');
    Route::get('/product/create','ProductController@create')->name('admin.product.create');
    Route::post('/product','ProductController@store')->name('admin.product.store');
    Route::get('/product/edit/{id}','ProductController@edit')->name('admin.product.edit');
    Route::post('/product/update/{id}','ProductController@update')->name('admin.product.update');
    Route::get('/product/delete/{id}','ProductController@delete')->name('admin.product.delete');
});
   
    ####################end product#######################