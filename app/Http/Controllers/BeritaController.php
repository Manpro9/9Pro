<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Http\Requests;
use App\Artikel;
use App\Comments;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataBerita = Artikel::where('type', 'berita')
                                ->where('status', 'published')
                                ->orderBy('created_at', 'desc')->paginate(3);
        return view('content.berita', compact('dataBerita'));
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
        $all = Artikel::where('type', '=', 'berita')->get();
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
        $artikel = Artikel::where('type', '=', 'berita')->paginate(5);
        return view('admin.content-panelberita', compact('artikel'));
    }

    public function delete($id) {
        try {
            Artikel::find($id)->delete();

            return redirect()->action('BeritaController@panel');
        } catch (Exception $e) {
            
        }
    }
}
