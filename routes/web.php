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

Route::get('/', 'FrontEndController@index')->name('home');
Route::get('/events/{event}', 'FrontEndController@singleEvent')->name('event.single');
Route::get('/news/{news}', 'FrontEndController@singleNews')->name('news.single');

Auth::routes();



Route::group(['middleware'=>'auth', 'prefix'=>'admin'], function(){
    Route::get('dashboard', 'AdminController@dashboard');
    Route::get('info', 'InfoController@info')->name('info');
    Route::post('info', 'InfoController@store')->name('info');
    Route::get('profile', 'AdminController@profile')->name('profile');
    Route::post('profile', 'AdminController@store')->name('profile');
    Route::resource('page', 'PageController');
    Route::resource('slider', 'SliderController');
    Route::resource('event', 'EventController');
    Route::resource('news', 'NewsController');
    Route::resource('partner', 'PartnerController');
    Route::resource('gallery', 'GalleryController');
    Route::resource('image', 'GalleryImagesController');
    Route::get('/image/add-to-gallery/{image}', 'GalleryImagesController@addToGallery')->name('gallery.add');
    Route::post('/image/add-to-gallery/{image}', 'GalleryImagesController@setGallery')->name('set.gallery');
});
