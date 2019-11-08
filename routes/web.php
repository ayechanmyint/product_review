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

Route::get('/products','ProductController@index')->name("products.index");

Route::get('/products/create','ProductController@create');

Route::get('/products/show/{id}','ProductController@show')->name("products.show");

Route::post('/products/store','ProductController@store');

Route::get('/products/edit/{id}','ProductController@edit');

Route::post('/products/update/{id}','ProductController@update');

Route::post('/products/vote','ProductController@vote');