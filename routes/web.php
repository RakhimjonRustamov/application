<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware grouSp. Now create something great!
|
*/

Route::get('/', function() {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'UserController@index');



Route::get('/superadmin/login', 'Auth\AdminLoginController@showLoginForm')->name('superadmin.login');
Route::post('/superadmin/login', 'Auth\AdminLoginController@login')->name('superadmin.login.submit');
Route::get('/superadmin', 'AdminController@index')->name('superadmin.dashboard');
Route::post('/superadmin/logout', 'AdminController@superadminLogout')->name('superadmin.logout');



