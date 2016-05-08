<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Agenda;

class AgendaController extends Controller
{	
	public function show() {
		$agenda = Agenda::paginate(5);
		return view('content.agenda', compact('agenda'));
	}
	public function show_form() {
		return view('admin.content-addagenda');
	}

    public function create(Request $request) {
    	$name = $request->name;
    	$description = $request->desc;
    	$start = $request->start;
    	$end = $request->end;

    	// harus di convert terlebih dahulu
    	$start = strtr($start, '/', '-');
    	$end = strtr($end, '/', '-');
    	
    	try {
    		$agenda = new Agenda;

    		$agenda->title = $name;
    		$agenda->description = $description;
    		$agenda->start = date('Y-m-d', strtotime($start));
    		$agenda->end = date('Y-m-d', strtotime($end));

    		echo $agenda->start . "<br>";
    		echo $agenda->end;
    		$agenda->save();

    		$request->session()->flash('success_message', 'Agenda berhasil dibuat!');
            return redirect()->action('AgendaController@show');
    	} catch (Exception $e) {
    		$request->session()->flash('error_message', 'Terdapat kesalahan. Silahkan coba beberapa saat lagi.');
            return redirect()->action('AgendaController@show');
    	}
    }
}
