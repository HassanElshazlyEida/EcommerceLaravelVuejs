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
        Route::resource("users",'UsersController');
        Route::delete("users/destroy/all","UsersController@multi_delete");

        Route::resource("admins",'AdminController');
        Route::delete("admin/destroy/all","AdminController@multi_delete");

        Route::resource("countries",'CountriesController');
        Route::delete("countries/destroy/all","CountriesController@multi_delete");

        Route::get("settings",'Settings@setting');
        Route::post("settings",'Settings@setting_save');

        Route::get("/",function(){
            return view('admin.home');
        });
        Route::any("logout",'AdminAuthController@logout');
        Route::get("lang/{lang}",function($lang){
            session()->has('lang') ?  session()->forget('lang'):"";
            $lang=='ar' ?  session()->put('lang','ar') :  session()->put('lang','en');
            return back();
        });
    });

});
