<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

use App\Artikel;

class ArtikelController extends Controller
{	
	public function show($title) {

		$all = Artikel::where('type', '=', 'kegiatan')->get();
		foreach ($all as $data) {
			if (str_slug($data->title) == $title) {
				$tempId = $data->id;
				break;	
			}
		}
		
		$artikel = Artikel::where('id', '=', $tempId)->get();
			
		return view('content.detailartikel', compact('artikel'));
	}

	public function delete_artikel(){
		Artikel::find(Input::get('id'))->delete();
		return response()->json('success');	
	}

	public function gallery(){
		$data = Artikel::where('type', '=', 'kegiatan')->paginate(8);

		return view('content.gallery', compact('data'));
	}    
}
