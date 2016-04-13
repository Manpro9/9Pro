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

	// Route untuk halaman index (home)
    Route::get('/', function() {
	    return view('index');
	});

	// Route untuk Content
	Route::get('/berita', function() {
	    return view('content.berita');
	});
	Route::get('/pengumuman', function(){
		return view('content.pengumuman');
	});
	Route::get('/kegiatan', function() {
	    return view('content.kegiatan');
	});
	Route::get('/agenda', function() {
	    return view('content.agenda');
	});
	Route::get('/dokumen', function(){
		return view('content.dokumen');
	});
	Route::get('/gallery', function() {
	    return view('content.gallery');
	});
	Route::get('/users', function() {
	    return view('content.users');
	});

	// Route untuk Admin
	Route::get('/content/edit', function() {
		return view('admin.content-editor');
	});
	
	Route::get('/content/upload', function() {
		return view('admin.content-upload');
	});

	Route::get('/content/adduser', function() {
		return view('admin.content-adduser');
	});
});