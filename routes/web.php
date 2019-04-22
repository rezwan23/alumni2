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



Route::group(['middleware'=>'auth', 'prefix'=>'admin'], function(){
    Route::get('dashboard', 'AdminController@dashboard');
    Route::get('info', 'InfoController@info')->name('info');
    Route::post('info', 'InfoController@store')->name('info');
    Route::get('profile', 'AdminController@profile')->name('profile');
    Route::post('profile', 'AdminController@store')->name('profile');
    Route::resource('page', 'PageController');
});
