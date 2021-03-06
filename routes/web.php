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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/hotels', 'HotelController@index');

Route::get('/trains', 'TrainController@index');

Route::get('/manage', 'ManageController@index');

Route::get('/manage/ticket/{ticketcode}', 'ManageController@ticket');
