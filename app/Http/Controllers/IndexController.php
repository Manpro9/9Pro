<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Artikel;
use App\Agenda;

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
        $data = Agenda::all();

        if (count($data) > 0) {
            $myEvents = [];
            foreach($data as $d) {
                if ($d->start != $d->end) {
                    $dates[] = $this->date_range($d->start, $d->end, "+1 day", "Y-m-d");
                    foreach($dates as $row)
                           foreach($row as $date)
                                 array_push($myEvents, $date);
                } else {
                    array_push($myEvents, $d->start);
                }
            }   
            return response()->json(array('myEvents' => $myEvents));
        } else {
            $myEvents = [];
             return response()->json(array('myEvents' => $myEvents));
        }
    }

    function date_range($first, $last, $step = '+1 day', $output_format = 'Y-m-d' ) {

        $dates = array();
        $current = strtotime($first);
        $last = strtotime($last);

        while( $current <= $last ) {

            $dates[] = date($output_format, $current);
            $current = strtotime($step, $current);
        }
        return $dates;
    }
}
