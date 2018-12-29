<?php

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
Route::get('user', function () {
    return view('user');
});
Route::get('home', function () {
    return view('home');
});

Route::get('user/create',['uses'=>'UserController@create']);
Route::post('user',['uses'=>'UserController@store']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 });
