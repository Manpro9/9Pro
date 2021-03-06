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

    // Ajax
	Route::post('/index/artikel/ajax', 'IndexController@artikel_ajax');

	// Route untuk Content
	Route::get('/berita', 'BeritaController@index');
	Route::get('/pengumuman', 'PengumumanController@index');
	Route::get('/kegiatan', 'KegiatanController@index');

	Route::get('/agenda', 'AgendaController@show');
	Route::get('/dokumen', 'DocumentController@show');
	Route::get('/gallery', 'ArtikelController@gallery');
	Route::get('/profil', function() {
	    return view('content.profil');
	});

	//Route untuk tampilkan detail Berita, Pengumuman, Kegiatan, Gallery
	Route::get('/berita/{id}', ['as' => 'berita.show', 'uses' => 'BeritaController@show' ]);
	Route::get('/pengumuman/{id}', ['as' => 'pengumuman.show', 'uses' => 'PengumumanController@show' ]);
	Route::get('/kegiatan/{id}', ['as' => 'kegiatan.show', 'uses' => 'KegiatanController@show' ]);

	// Auth (Login / Logout)
	Route::get('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@showLoginForm']);
	Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@logout']);

	// Validating Login
	Route::post('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@login']);

	// search
	Route::get('/search', function() {
	    return redirect('/');
	}); 
	Route::post('/search', ['as' => 'artikel.search', 'uses' => 'ArtikelController@search']);

	// comment di artikel
	Route::post('/berita/comment', ['as' => 'berita.comment', 'uses' => 'ArtikelController@comment']);
	Route::post('/kegiatan/comment', ['as' => 'kegiatan/comment', 'uses' => 'ArtikelController@comment']);

	// kritik & saran
	Route::post('/send/message', 'IndexController@send_message');

	// get calendar data
	Route::post('/get_calendar_data', 'IndexController@get_calendar_data');

	// get agenda calendar data
	Route::post('/get_daftar_agenda_data', 'IndexController@get_daftar_agenda_data');

	// Route untuk Admin
	Route::group(['middleware' => ['auth', 'authlevel:1']], function(){ 
		// show create form
		Route::get('/content/create', 'ArtikelController@index');
		Route::get('/content/upload', 'DocumentController@index');

		// show panel
		Route::get('/content/panelberita', 'BeritaController@panel');
		Route::get('/content/panelkegiatan', 'KegiatanController@panel');

		// show detail edit
		Route::get('/berita/edit/{id}', ['as' => 'berita.edit', 'uses' => 'BeritaController@edit' ]);
		Route::get('/kegiatan/edit/{id}', ['as' => 'kegiatan.edit', 'uses' => 'KegiatanController@edit' ]);
		Route::get('/content/berita/edit/{id}', ['as' => 'berita.edit', 'uses' => 'BeritaController@edit' ]);
		Route::get('/content/kegiatan/edit/{id}', ['as' => 'kegiatan.edit', 'uses' => 'KegiatanController@edit' ]);

		// creating artikel
		Route::post('/content/create', 'ArtikelController@create');
		
		// creating user
		Route::get('/content/adduser', 'UserController@show_form');
		Route::post('/content/adduser', 'UserController@create');

		// uploading document
		Route::post('/content/upload', 'DocumentController@create');

		// downloading document
		Route::get('document/download/{id}', ['as' => 'document.download', 'uses' => 'DocumentController@download']);

		// re-upload document
		Route::get('reupload/document/{id}', ['as' => 'document.show_form_reupload', 'uses' => 'DocumentController@show_form_reupload']);
		Route::post('reupload/document/{id}', ['as' => 'document.re_upload', 'uses' => 'DocumentController@re_upload']);

		// edit user
		Route::get('/edit/user/{id}', ['as' => 'user.edit', 'uses' => 'UserController@edit' ]);
		Route::post('/edit/user/{id}', ['as' => 'user.update', 'uses' => 'UserController@update' ]);

		// update
		Route::get('/berita/edit/{id}/update', ['as' => 'berita.update', 'uses' => 'ArtikelController@update' ]);
		Route::get('/kegiatan/edit/{id}/update', ['as' => 'kegiatan.update', 'uses' => 'ArtikelController@update' ]);
		Route::post('/berita/edit/{id}/update', ['as' => 'berita.update', 'uses' => 'ArtikelController@update' ]);
		Route::post('/kegiatan/edit/{id}/update', ['as' => 'kegiatan.update', 'uses' => 'ArtikelController@update' ]);

		// delete artikel
		Route::get('/content/berita/delete/{id}', ['as' => 'berita.delete', 'uses' => 'BeritaController@delete' ]);
		Route::get('/content/kegiatan/delete/{id}', ['as' => 'kegiatan.delete', 'uses' => 'KegiatanController@delete' ]);
		Route::post('/content/delete','ArtikelController@delete_artikel');

		// delete user
		Route::get('/delete/{id}', ['as' => 'delete.user', 'uses' => 'UserController@delete']);

		// delete file
		Route::get('/delete/document/{id}', ['as' => 'document.delete', 'uses' => 'DocumentController@delete' ]);
		
		// show user (admin)
		Route::get('/users', 'UserController@index');

		// add agenda
		Route::get('/content/addagenda', 'AgendaController@show_form');
		Route::post('/content/addagenda', 'AgendaController@create');

		// edit agenda
		Route::get('/angeda/edit/{id}', ['as' => 'agenda.edit', 'uses' => 'AgendaController@edit' ]);
		Route::post('/angeda/edit/{id}', ['as' => 'agenda.update', 'uses' => 'AgendaController@update' ]);

		Route::get('/angeda/delete/{id}', ['as' => 'agenda.delete', 'uses' => 'AgendaController@delete' ]);

	});

	// Resource Route
	Route::resource('berita', 'BeritaController');
	Route::resource('pengumuman', 'PengumumanController');
	Route::resource('kegiatan', 'KegiatanController');
});
