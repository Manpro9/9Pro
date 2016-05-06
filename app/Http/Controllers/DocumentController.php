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
            $fileName = $request->title . "." . $extension;
            if ($type == 'gambar') {
                $destinationPath = public_path() . '/documents/images/' . $extension;
                $pathFile = "\\public\\documents\\images\\" . $extension . "\\" . $fileName; 
            } else if ($type == 'dokumen') {
                $destinationPath = public_path() . '/documents/' . $extension;
                $pathFile = "\\public\\documents\\" . $extension . "\\" . $fileName; 
            }
            
            $file->move($destinationPath, $fileName);
            

            $document = new Documents;

            $document->title = $title;
            $document->type = $extension;
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

    public function show() {
    	$documents = Documents::paginate(5);
    	return view('content.dokumen', compact('documents'));
    }
}