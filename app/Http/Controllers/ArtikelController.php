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

	public function update(Request $request, $id) {
		$title = $request->title;
		$desc = $request->desc;
		$type = $request->type;
		$content = $request->temp_content;
		$status = $request->temp_status;

		if (Input::hasFile('image')) {

			// storing image
			$file = $request->file('image');
			$destinationPath = public_path() . '/images/' . $type;
            $extension = $file->getClientOriginalExtension();
            $fileName = $type . "_" . str_slug($title) . "." . $extension;
            $file->move($destinationPath, $fileName);
            $pathFile = "\\public\\images\\" . $type . "\\" . $fileName;

           	try {
           		Artikel::find($id)->update([
           			'title' => $title,
           			'description' => $desc,
           			'image' => $pathFile,
           			'type' => $type,
           			'content' => $content,
           			'status' => $status,
           			]);

           		if ($type == 'berita')
           			return redirect()->action('BeritaController@index');
           		else if ($type == 'kegiatan')
           			return redirect()->action('KegiatanController@index');
           	} catch (Exception $e) {
           		return redirect()->action('IndexController@index');
           	}
		} else {
			try {
				Artikel::find($id)->update([
           			'title' => $title,
           			'description' => $desc,
           			'type' => $type,
           			'content' => $content,
           			'status' => $status,
           			]);

				if ($type == 'berita')
	           			return redirect()->action('BeritaController@index');
	       		else if ($type == 'kegiatan')
	       			return redirect()->action('KegiatanController@index');
			} catch (Exception $e) {
				return redirect()->action('IndexController@index');
			}
		}
		
	}    
}
