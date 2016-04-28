<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

use App\Artikel;

class ArtikelController extends Controller
{
	public function delete_artikel(){
		//echo $id;
		// Artikel::find(Input::get('id'))->delete();
		return response()->json('success');
		/*if (get('kategori') == 'Berita') {
			$dataBerita = Artikel::where('type', 'berita')->orderBy('created_at', 'desc')->paginate(3);
        	return view('content.berita', compact('dataBerita'));
		} else if ($kategori == 'Kegiatan') {
			$dataKegiatan = Artikel::where('type', 'kegiatan')->orderBy('created_at', 'desc')->paginate(3);
        	return view('content.kegiatan', compact('dataKegiatan'));
		}*/
	}    
}
