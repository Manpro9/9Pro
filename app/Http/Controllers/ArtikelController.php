<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

use App\Artikel;
use App\Comments;
use App\User;

class ArtikelController extends Controller
{	
	public function index() {
		return view('admin.content-create');
	}

	public function create(Request $request) {
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
		} else
			$pathFile = "\\public\\images\\ukdw_icon.jpg";

		$artikel = new Artikel;
		$artikel->title = $title;
		$artikel->description = $desc;
		$artikel->image = $pathFile;
		$artikel->type = $type;
		$artikel->content = $content;
		$artikel->status = $status;
		$artikel->save();

		if ($type == 'berita')
   			return redirect()->action('BeritaController@index');
   		else if ($type == 'kegiatan')
   			return redirect()->action('KegiatanController@index');
	}

	public function delete_artikel(){
		Artikel::find(Input::get('id'))->delete();
		return response()->json('success');	
	}

	public function gallery(){
		$data = Artikel::where('status', '=', 'published')
						->orderBy('created_at', 'desc')
						->paginate(8);

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

	public function search(Request $request) {
		$search = '%' . $request->str_search . '%'; 

		$dataTitle = Artikel::where('title', 'like', $search)->get();
		$dataDescription = Artikel::where('description', 'like', $search)->get();
		$dataContent = Artikel::where('content', 'like', $search)->get();

		$request->session()->flash('search_query', $request->str_search);
		return view('content.search', compact('dataTitle', 'dataDescription', 'dataContent'));
	}

	public function comment() {
		$title = Input::get('title');
		$name = Input::get('name');
		$message = Input::get('message');

		$checkArtikel = Artikel::where('title', '=', $title)->first();

		if (count($checkArtikel) > 0) {
			$id = $checkArtikel->id;

			$checkUsername = User::where('name', '=', $name)->first();

			if (count($checkUsername) <= 0)
				$username = 'Anonymous';
			else 
				$username = $checkUsername->username;

			try {
				$comment = new Comments;

				$comment->artikel_id = $id;
				$comment->username = $username;
				$comment->message = $message;
				$comment->save();

				$date = date('d M Y');
				return response()->json(array('status' => 'success', 'username' => $username, 'date' => $date, 'message' => $message));
			} catch (Exception $e) {
				return response()->json(array('status' => 'failed'));
			}

			
		} else 
			return response()->json(array('status' => 'failed'));
	}   
}
