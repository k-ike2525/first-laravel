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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/attendance', 'ContactController@create')->name('attendance');


Route::group(['middleware' => 'guest'], function() {
     Route::get('/register', 'Auth\RegisteredUserController@create')->name('register');
     Route::post('/register', 'Auth\RegisteredUserController@store')->name('register');
 });