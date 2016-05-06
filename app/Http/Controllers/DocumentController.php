<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Documents;
use File;

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
                $pathFile = "public\\documents\\images\\" . $extension . "\\" . $fileName; 
            } else if ($type == 'dokumen') {
                $destinationPath = public_path() . '/documents/' . $extension;
                $pathFile = "public\\documents\\" . $extension . "\\" . $fileName; 
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

    public function download(Request $request, $id) {
        $document = Documents::where('id', '=', $id)->first();
        if ( count($document) > 0) {
            $path = $document->path;

            if (File::exists($path))
                return response()->download($path);
            else {
                $request->session()->flash('error_message', 'File tidak ditemukan.');
                return redirect()->action('DocumentController@show');
            }

        } else {
            $request->session()->flash('error_message', 'Terdapat kesalahan. Silahkan coba beberapa saat lagi.');
            return redirect()->action('DocumentController@show');
        }
        
        // return response()->download($pathToFile);
    }

    public function delete(Request $request, $id) {
        $document = Documents::where('id', '=', $id)->first();
        if (count($document) > 0) {
            try {
                $document->delete();
                $path = $document->path;
                if (File::exists($path))
                    File::delete($path);
                $request->session()->flash('success_message', 'File berhasil dihapus.');
                return redirect()->action('DocumentController@show');
            } catch (Exception $e) {
                $request->session()->flash('error_message', 'Terdapat kesalahan. Silahkan coba beberapa saat lagi.');
                return redirect()->action('DocumentController@show');
            }
        } else {
            $request->session()->flash('error_message', 'Terdapat kesalahan. Silahkan coba beberapa saat lagi.');
            return redirect()->action('DocumentController@show');
        }
            
    }
}
