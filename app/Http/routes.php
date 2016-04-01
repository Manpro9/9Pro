<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/contoh', function() {
	return view('contoh.contoh_content');
});

Route::get('/home', function() {
	return view('content.home');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/dashboard', function () {
	    return view('content.dashboard');
	});

	Route::get('/news', function () {
	    return view('content.news');
	});

	Route::get('/detailnews', function () {
	    return view('content.detailnews');
	});
	
	Route::get('/agenda', function () {
	    return view('content.agenda');
	});

	Route::get('/documents', function () {
	    return view('content.documents');
	});

	Route::get('/gallery', function () {
	    return view('content.gallery');
	});

	Route::get('/admin', function () {
	    return view('content.admin');
	});


});