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

/*----------  search  ----------*/

Route::get('/search/{word}', 'JobController@list')->name('job.list');

/*----------  end search  ----------*/


Route::prefix('company')->group(function () {

	Route::post('/{company}', 'CompanyController@mail')->name('company.mail');
	
});

Route::prefix('job')->group(function () {

	Route::get('/free-post', function(){

		return view('job.free-post');

	})->name('job.freePost');

	Route::get('/{job}', 'JobController@show')->name('job.show');
	
});




Route::group(['middleware' => ['auth']], function(){

	Route::get('/dashboard/{word?}', function($word = 'dashboard'){

		return view('partials.dashboard.index', compact('word'));

	})->name('dashboard.index');


	Route::prefix('candidate')->group(function () {

		Route::post('/profile/{candidate}', 'CandidateController@updateProfile')->name('update.candidate.profile')->middleware([sprintf("role:%s", \App\Role::CANDIDATE)]);
		
	});

	Route::get('/{job}/apply', 'CandidateController@apply')->name('candidate.apply')->middleware([sprintf("role:%s", \App\Role::CANDIDATE)]);	
		
});

// Route::prefix('candidate')->group(function () {

// 	Route::get('/dashboard', function(){

// 		return view('candidate.dashboard');

// 	})->name('candidate.dashboard');
	
// })->middleware([sprintf("role:%s", \App\Role::CANDIDATE)]);	
	





Route::prefix('admin')->group(function () {

	Route::group(['middleware' => ['auth']], function(){

		Route::get('/', 'AdminController@index')->name('admin.index');
		// Route::get('/', 'OffertController@store')->name('offert.store')
		// 	->middleware([sprintf("role:%s", \App\Role::ADMIN)]);

		Route::get('/', 'AdminController@index')->name('admin.index');


		Route::prefix('offert')->group(function () {

			Route::get('/create', 'AdminController@offertCreate')->name('admin.offert.create');

			Route::post('/create', 'AdminController@offertStore')->name('admin.offert.store');

		});


		Route::prefix('company')->group(function () {

			Route::get('/create', 'AdminController@companyCreate')->name('admin.company.create');

			Route::post('/create', 'AdminController@companyStore')->name('admin.company.store');

		});

		
	});
	
});