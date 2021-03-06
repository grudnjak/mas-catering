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

Route::get('/', 'PageController@index' );
Route::get('/about', 'PageController@about' );
Route::get('/gallery', 'PageController@gallery' );
Route::get('/catering', 'PageController@catering' );
Route::get('/shop', 'PageController@shop' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('posts', 'PostsController'); 
Route::resource('jedilniki', 'JedilnikController'); 
Route::resource('galerija', 'GalerijaController'); 

//mail
Route::get('/contact', ['uses'=>'ContactUSController@contactUS']);
Route::post('/contact', ['uses'=>'ContactUSController@contactUSPost','as'=>'contactus.store']);

