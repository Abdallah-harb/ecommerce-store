<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

//if any one (user or admin) write on url admin/   return it to admin login
Route::group(['namespace'=> 'Dashboard','prefix'=>'admin','middleware'=>'guest:admin'],function(){

    Route::get('login','loginController@login')->name('admin.login');
    Route::post('login','loginController@postLogin')->name('admin.post.login');
});

Route::group(['namespace'=> 'Dashboard','prefix'=>'admin','middleware'=>'auth:admin'],function(){
    Route::get('/','indexController@index')->name('admin.dashboard');

});





