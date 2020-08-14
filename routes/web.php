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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// custom added routes:
Route::get('/user/create', 'UserController@show_create')->name('user-show-create');
Route::get('/user/list', 'UserController@show_list')->name('user-show-list');
Route::post('/user/create', 'UserController@create')->name('user-create');
Route::post('/user/tag/check', 'UserController@check_blue_tag_id')->name('check-tag');
