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

Route::get('/', 'HomeController@index')->name('home.index');

Route::prefix('offert')->group(function () {

	Route::get('/', 'OffertController@index')->name('offert.index');

	Route::get('/{offert}', 'OffertController@show')->name('offert.show');

});
