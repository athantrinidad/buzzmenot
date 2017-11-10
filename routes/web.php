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
/* START CUSTOM PAGES ROUTES */
Route::get('/', 'CustompagesController@index');
Route::get('/about', 'CustompagesController@about');
Route::get('/partners', 'CustompagesController@partners');
/* START CUSTOM PAGES ROUTES */

/* START CUSTOM PAGES ROUTES */

/* START CUSTOM PAGES ROUTES */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
