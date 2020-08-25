<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;

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

Route::group(['prefix' => 'admin','namespace'=>"Admin"], function () {

    Config::set('auth.defines','admin'); //SET auth.defaults.guard to admin
    Route::get("login",'AdminAuthController@login');
    Route::post("login",'AdminAuthController@dologin');
    Route::get("forgot/password",'AdminAuthController@forgot_password');
    Route::post("forgot/password",'AdminAuthController@forgot_password_reset');
    Route::get("reset/password/{token}",'AdminAuthController@reset_password');
    Route::post("reset/password/{token}",'AdminAuthController@reset_password_confirm');
    Route::group(['middleware'=>'admin:admin'],function(){
        Route::resource("admins",'AdminController');
        Route::get("/",function(){
            return view('admin.home');
        });
        Route::any("logout",'AdminAuthController@logout');
    });

});
