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

Route::get('/images/{path}/{attachment}', function($path, $attachment) {
	$file = sprintf('storage/%s/%s', $path, $attachment);
	if(File::exists($file)) {
		return Image::make($file)->response();
	}
});

Route::get('/', 'HomeController@index')->name('home.index');

Route::prefix('offert')->group(function () {

	Route::get('/', 'OffertController@index')->name('offert.index');

	Route::get('/d/{location}', 'OffertController@location')->name('offert.location');

	Route::post('/', 'OffertController@list')->name('offert.list');

	Route::get('/{offert}', 'OffertController@show')->name('offert.show');

	Route::post('/{offert}', 'OffertController@mail')->name('offert.mail');

});


Route::prefix('company')->group(function () {

	Route::post('/{company}', 'CompanyController@mail')->name('company.mail');
	
});