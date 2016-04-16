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
    Route::get('/', 'IndexController@index');

	// Route untuk Content
	Route::get('/berita', 'BeritaController@index');
	Route::get('/pengumuman', 'PengumumanController@index');
	Route::get('/kegiatan', 'KegiatanController@index');
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

<<<<<<< HEAD
	Route::get('/login', function() {
	    return view('content.login');
	});
=======
	//Route untuk tampilkan detail Berita, Pengumuman, Kegiatan
	Route::get('/berita/{id}', ['as' => 'berita.show', 'uses' => 'BeritaController@show' ]);
	Route::get('/pengumuman/{id}', ['as' => 'pengumuman.show', 'uses' => 'PengumumanController@show' ]);
	Route::get('/kegiatan/{id}', ['as' => 'kegiatan.show', 'uses' => 'KegiatanController@show' ]);
>>>>>>> f2437ff8a2139fe37f102f2ca3f597bf82bec284

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
	Route::get('/content/addagenda', function() {
		return view('admin.content-addagenda');
	});


	// Ajax
	Route::post('/index/artikel/ajax', 'IndexController@artikel_ajax');

	// Resource Route
	Route::resource('berita', 'BeritaController');
	Route::resource('pengumuman', 'PengumumanController');
	Route::resource('kegiatan', 'KegiatanController');
});