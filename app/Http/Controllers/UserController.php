<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Crypt;

class UserController extends Controller
{
    public function index() {
    	$users = User::where('auth_level', 2)->paginate(10);
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
            $user->password = bcrypt($request->name);
            $user->auth_level = 2;
            $user->save();

            return redirect()->action('UserController@index');
        } catch (Exception $e) {
            return redirect()->action('IndexController@index');
        }  
    }

    public function edit($id) {
        try {
            $users = User::where('id', '=', $id)->get();
            return view ('admin.content-edit-user', compact('users'));
        } catch (Exception $e) {
            return redirect()->action('UserController@index');
        }
    }

    public function update(Request $request, $id) {
        if($request->password != '') {
            try {
                User::find($id)->update([
                        'name' => $request->name,
                        'username' => $request->username,
                        'email' => $request->email,
                        'password' => bcrypt($request->password),
                    ]);
                return redirect()->action('UserController@index');
            } catch (Exception $e) {
                return redirect()->action('IndexController@index');
            }
        } else {
            // kalau password tidak diganti
             try {
                User::find($id)->update([
                        'name' => $request->name,
                        'username' => $request->username,
                        'email' => $request->email,
                    ]);
                return redirect()->action('UserController@index');
            } catch (Exception $e) {
                return redirect()->action('IndexController@index');
            }
        }

        
    }
}
