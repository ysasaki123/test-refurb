<?php

use Illuminate\Support\Facades\Route;
/*
testtest
/*
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

// just for learning purposes
Route::get('/team/with/{id}', function ($id) {
    dd(App\Team::where('id', '=', $id)->with(['parent', 'children', 'users'])->get());
});
Route::get('/team/parent/{id}', function ($id) {
    dd(App\Team::find($id)->parent);
});
Route::get('/team/children/{id}', function ($id) {
    dd(App\Team::find($id)->children);
});
Route::get('/team/users/{id}', function ($id) {
    dd(App\Team::find($id)->users);
});

Route::get('/user/with/{id}', function ($id) {
    dd(App\User::where('id', '=', $id)->with(['team', 'agency'])->get());
});
Route::get('/user/team/{id}',  function ($id) {
    dd(App\User::find($id)->team);
});
Route::get('/user/agency/{id}',  function ($id) {
    dd(App\User::find($id)->agency);
});

Route::get('/agency/with/{id}',  function ($id) {
    dd(App\Agency::where('id', '=', $id)->with(['users'])->get());
});
Route::get('/agency/users/{id}', function ($id) {
    dd(App\Agency::find($id)->users);
});
