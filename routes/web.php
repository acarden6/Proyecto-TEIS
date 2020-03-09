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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product/index', 'ProductController@index')->name("product.index");
Route::get('/product/create', 'ProductController@create')->name("product.create");
Route::get('/product/show/{id}', 'ProductController@show')->name("product.show");
Route::post('/product/save', 'ProductController@save')->name("product.save");