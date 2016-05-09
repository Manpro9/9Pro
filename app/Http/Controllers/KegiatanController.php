<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Http\Requests;
use App\Artikel;
use File;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataKegiatan = Artikel::where('type', 'kegiatan')
                                ->where('status', 'published')
                                ->orderBy('created_at', 'desc')->paginate(3);
        return view('content.kegiatan', compact('dataKegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        $tempId = null;
        $all = Artikel::where('type', '=', 'kegiatan')->get();
        foreach ($all as $data) {
            if (str_slug($data->title) == $title) {
                $tempId = $data->id;
                break;  
            }
        }

        if ($tempId != null) {
            $artikel = Artikel::where('id', '=', $tempId)->get();

            $comments = Artikel::join('comments', function($join) use($tempId) {
                $join->on('artikel.id', '=', 'comments.artikel_id')
                    ->where('artikel.id', '=', $tempId);
            })->orderBy('comments.created_at', 'desc')->get();
                
            return view('content.detailartikel', compact('artikel', 'comments'));
        } else
            return redirect()->action('IndexController@index');
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::where('id', '=', $id)->get();

        return view ('admin.content-edit-artikel', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function panel() {
        $artikel = Artikel::where('type', '=', 'kegiatan')->paginate(5);

        return view('admin.content-panelkegiatan', compact('artikel'));
    }

    public function delete(Request $request, $id) {
        try {
            $kegiatan = Artikel::where('id', '=', $id)->first();

            if (count($kegiatan) > 0) {
                $kegiatan->delete();
                $path = $kegiatan->image;
                $path = strtr($path, "\\", "/");
                $path = substr($path, 1);

                if (File::exists($path))
                    File::delete($path);

                $request->session()->flash('success_message', 'Artikel berhasil dihapus.');
                return redirect()->action('KegiatanController@panel');
            } else {
                $request->session()->flash('error_message', 'Terdapat kesalahan. Silahkan coba beberapa saat lagi.');
                return redirect()->action('KegiatanController@panel');
            }
        } catch (Exception $e) {
            $request->session()->flash('error_message', 'Terdapat kesalahan. Silahkan coba beberapa saat lagi.');
            return redirect()->action('KegiatanController@panel');
        }
    }

}
