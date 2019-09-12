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

Route::get('/', 'HomeController@home');

Route::get('/phimthieunhi','HomeController@getphimthieunhi');

Route::get('/phimkiemhiep','HomeController@getphimkiemhiep');

Route::get('/phimtinhcam','HomeController@getphimtinhcam');

Route::get('/phim16+','HomeController@getphim16')->middleware('CheckAge');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
