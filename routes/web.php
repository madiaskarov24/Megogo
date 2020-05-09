<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('megogo.net');


//Auth processes

Route::get('login', 'Auth\LoginController@index');
Route::post('login-process', 'Auth\LoginController@loginProcess')->name('login-process');

Route::get('/signup', 'Auth\RegisterController@create')->name('signup');
Route::post('/signup', 'Auth\RegisterController@store');
Route::get('/user', 'SessionsController@create');
Route::post('/user', 'SessionsController@store');
Route::get('/logout', 'Auth\LoginController@logout');


//Route::get('/login', function () {   return view('login');});

//Admin processes
Route::get('admin/create', 'Auth\RegisterController@createAdmin')->name('admin-create')->middleware('is_admin');
Route::post('admin-store', 'Auth\RegisterController@storeAdmin')->name('store-admin')->middleware('is_admin');


//Content processes
Route::get('admin/content/add', 'ContentController@create')->middleware('is_admin');
Route::post('admin/content/add', 'ContentController@store')->name('content.store')->middleware('is_admin');
Route::get('admin/content/{content}/edit', 'ContentController@edit')->name('content.edit')->middleware('is_admin');
Route::patch('admin/content/{content}/edit', 'ContentController@update')->name('content.update')->middleware('is_admin');

Route::get('content/{id}', 'ContentController@showById');
Route::get('content', 'ContentController@showAll')->name('content.showAll');
Route::get('content-search', 'ContentController@searchData');


Route::get('/user', function () {
    return view('user');
});

Route::get('/admin', 'AdminController@admin')->middleware('is_admin')->name('admin');
