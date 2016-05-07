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
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $check = Documents::where('title', '=', $title)->get();

            if (count($check) > 0) {
                $request->session()->flash('error_message', 'Nama file sudah dipakai. Silahkan ganti dengan nama lain.');
                $request->session()->flash('flash_title', $title);
                $request->session()->flash('flash_desc', $desc);
                return redirect()->action('DocumentController@index');
            } else {
                if (strtolower($extension) != 'pdf') {
                    $request->session()->flash('error_message', 'File harus .pdf');
                    return redirect()->action('DocumentController@index');
                } else {
                    // storing file
                    $fileName = $request->title . "." . $extension;

                    $destinationPath = public_path() . '/documents';
                    $pathFile = "public\\documents\\" . $fileName; 

                    
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
            }     
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

    public function show_form_reupload(Request $request, $id) {
        try {
            $document = Documents::find($id);
            return view ('admin.content-re_upload', compact('document'));
        } catch (Exception $e) {
            $request->session()->flash('error_message', 'Terdapat kesalahan. Silahkan coba beberapa saat lagi.');
            return redirect()->action('DocumentController@show');
        }   
    }

    public function re_upload(Request $request, $id) {
        try {
            $document = Documents::find($id);
            
            if (count($document) > 0) {
                if (Input::hasFile('file')) {
                    $title = $request->title;
                    $type = $request->type;
                    $desc = $request->desc;

                    // storing file
                    $file = $request->file('file');
                    $extension = $file->getClientOriginalExtension();

                    
                    if (strtolower($extension) != 'pdf') {
                        $request->session()->flash('error_message', 'File harus .pdf');
                        return redirect()->action('DocumentController@index');
                    } else {
                        // hapus file lama
                        $prevFile = $document->path;
                        if (File::exists($prevFile))
                            File::delete($prevFile);

                        $fileName = $request->title . "." . $extension;

                        $destinationPath = public_path() . '/documents';
                        $pathFile = "public\\documents\\" . $fileName; 

                        $file->move($destinationPath, $fileName);

                        Documents::find($id)->update([
                            'title' => $title,
                            'type' => $extension,
                            'description' => $desc,
                            'path' => $pathFile,
                            ]);

                        $request->session()->flash('success_message', 'Re-Upload dokumen berhasil!');
                        return redirect()->action('DocumentController@show');
                    }
                }
                else {
                    $request->session()->flash('error_message', 'Terdapat kesalahan. Silahkan coba beberapa saat lagi.');
                    return redirect()->action('DocumentController@index');
                }   
            }

        } catch (Exception $e) {
            $request->session()->flash('error_message', 'Terdapat kesalahan. Silahkan coba beberapa saat lagi.');
            return redirect()->action('DocumentController@show');
        }   
    }
}
