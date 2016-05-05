<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Crypt;

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

    public function show_form() {
        return view('admin.content-adduser');
    }

    public function create(Request $request) {

        try {
             $user = new User;

            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Crypt::encrypt($request->name);
            $user->auth_level = 2;
            $user->save();

            return redirect()->action('UserController@index');
        } catch (Exception $e) {
            return redirect()->action('IndexController@index');
        }
       
    }
}
