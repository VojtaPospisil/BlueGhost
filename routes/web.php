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

Route::resource('/', 'UserController');
Route::get('/checkSlug', 'UserController@checkSlug');
Route::get('/{user:slug}', 'UserController@edit')->name('edit');
Route::get('/delete/{user:id}', 'UserController@destroy')->name('delete');
Route::post('/store', 'UserController@store')->name('store');
Route::post('/update/{user:id}', 'UserController@update')->name('update');

