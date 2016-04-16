<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Artikel;

class IndexController extends Controller
{
    public function index() {
    	$dataArtikel = Artikel::where('type', 'berita')
    					->orderBy('created_at', 'desc')
    					->take(2)
    					->get();
    	return view('index', compact('dataArtikel'));
    }

    // Ajax untuk artikel di Index
    public function artikel_ajax(Request $request) {

    	$dataArtikel = Artikel::where('type', Input::get('type'))
    					->orderBy('created_at', 'desc')
    					->take(2)
    					->get();

    	$returnHTML = view('artikel-ajax', compact('dataArtikel'))->render();

    	return response()->json(array('success' => true, 'html' => $returnHTML));
    }
}
