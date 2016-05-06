<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Documents;

class DocumentController extends Controller
{
    public function index() {
    	return view('admin.content-upload');
    }

    public function create(Request $request) {
    	if (Input::hasFile('file')) {
    		$title = $request->title;
    		$type = $request->type;
    		$desc = $request->desc;

			// storing file
			$file = $request->file('file');
			$extension = $file->getClientOriginalExtension();
			$destinationPath = public_path() . '/documents/' . $extension;
            $fileName = $request->title . "." . $extension;
            $file->move($destinationPath, $fileName);
            $pathFile = "\\public\\documents\\" . $extension . "\\" . $fileName; 

            $document = new Documents;

            $document->title = $title;
            $document->type = $type;
            $document->description = $desc;
            $document->path = $pathFile;
            $document->save();

            $request->session()->flash('success_message', 'Upload dokumen berhasil!');
    		return redirect()->action('DocumentController@index');

    	}
    	else {
    		$request->session()->flash('error_message', 'Terdapat kesalahan. Silahkan coba beberapa saat lagi.');
    		return redirect()->action('DocumentController@index');
    	}
    		
    }
}
