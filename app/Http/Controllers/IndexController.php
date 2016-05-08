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

    public function send_message() {
        $email = Input::get('email');
        $message = Input::get('message');
        
        // fungsi udah jadi, tinggal uncomment aja
        // $data = array('email' => $email, 'message' => $message);
        // Mail::send('return_view_messange', $data, function($message){
        //     $message->to('email_tujuan@email', 'Some Guy Coba')->subject('Welcome!');
        // });
        return response()->json('success');
    }

    public function get_calendar_data() {
        $myEvents = [];
        array_push($myEvents, "2016-05-23");
        array_push($myEvents, "2016-05-25");
        return response()->json(array('myEvents' => $myEvents));
    }
}
