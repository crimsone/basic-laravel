<?php

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
Route::get('get-users', 'UserController@index')->name('get-users');
Route::get('get-deleteuser', 'UserController@destroy')->name('get-deleteuser');
Route::post('post-adduser', 'UserController@store')->name('post-adduser');
Route::post('post-updateuser', 'UserController@update')->name('post-updateuser');

Route::get('/', function () {
    return view('welcome');
});
