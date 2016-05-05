<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function index() {
    	$users = User::where('auth_level', 2)->get();
    	return view('content.users', compact('users'));
    }

    public function delete($id) {
    	try {
    		User::find($id)->delete();
    		return redirect()->action('UserController@index');
    	} catch (Exception $e) {
    		return redirect()->action('IndexController@index');
    	}
    }
}
