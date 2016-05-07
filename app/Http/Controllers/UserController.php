<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\User;
use Crypt;

class UserController extends Controller
{
    public function index() {
    	$users = User::where('auth_level', 2)->paginate(10);
    	return view('content.users', compact('users'));
    }

    public function delete(Request $request, $id) {
    	try {
    		User::find($id)->delete();

            $request->session()->flash('success_message', 'User berhasil dihapus!');
    		return redirect()->action('UserController@index');
    	} catch (Exception $e) {
            $request->session()->flash('error_message', 'Terdapat kesalahan. Silahkan coba beberapa saat lagi.');
    		return redirect()->action('UserController@index');
    	}
    }

    public function show_form() {
        return view('admin.content-adduser');
    }

    public function create(Request $request) {
        try {
            $name = $request->name;
            $username = $request->username;
            $email = $request->email;
            $password = $request->password;

            $checkUsername = User::where('username', '=', $username)->get();
            $checkEmail = User::where('email', '=', $email)->get();

            if (count($checkUsername) > 0 && count($checkEmail) == 0) {
                $request->session()->flash('error_message', 'Usename Sudah Dipakai!');
                $request->session()->flash('flash_name', $name);
                $request->session()->flash('flash_username', $username);
                $request->session()->flash('flash_email', $email);
                $request->session()->flash('flash_password', $password);
                return redirect()->action('UserController@show_form');
            } else if (count($checkUsername) == 0 && count($checkEmail) > 0) {
                $request->session()->flash('error_message', 'Email Sudah Dipakai!');
                $request->session()->flash('flash_name', $name);
                $request->session()->flash('flash_username', $username);
                $request->session()->flash('flash_email', $email);
                $request->session()->flash('flash_password', $password);
                return redirect()->action('UserController@show_form');
            } else if (count($checkUsername) > 0 && count($checkEmail) > 0) {
                $request->session()->flash('error_message', 'Username & Email Sudah Dipakai!');
                $request->session()->flash('flash_name', $name);
                $request->session()->flash('flash_username', $username);
                $request->session()->flash('flash_email', $email);
                $request->session()->flash('flash_password', $password);
                return redirect()->action('UserController@show_form');
            } else {
                $user = new User;

                $user->name = $name;
                $user->username = $username;
                $user->email = $email;
                $user->password = bcrypt($password);
                $user->auth_level = 2;
                $user->save();

                $request->session()->flash('success_message', 'User berhasil dibuat!');
                return redirect()->action('UserController@index');
            }
        } catch (Exception $e) {
            $request->session()->flash('error_message', 'Terdapat kesalahan. Silahkan coba beberapa saat lagi.');
            return redirect()->action('UserController@index');
        }  
    }

    public function edit(Request $request, $id) {
        try {
            $users = User::where('id', '=', $id)->get();
            return view ('admin.content-edit-user', compact('users'));
        } catch (Exception $e) {
            $request->session()->flash('error_message', 'Terdapat kesalahan. Silahkan coba beberapa saat lagi.');
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

                $request->session()->flash('success_message', 'User berhasil diubah!');
                return redirect()->action('UserController@index');
            } catch (Exception $e) {
                $request->session()->flash('error_message', 'Terdapat kesalahan. Silahkan coba beberapa saat lagi.');
                return redirect()->action('UserController@index');
            }
        } else {
            // kalau password tidak diganti
             try {
                User::find($id)->update([
                        'name' => $request->name,
                        'username' => $request->username,
                        'email' => $request->email,
                    ]);

                $request->session()->flash('success_message', 'User berhasil diubah!');
                return redirect()->action('UserController@index');
            } catch (Exception $e) {
                $request->session()->flash('error_message', 'Terdapat kesalahan. Silahkan coba beberapa saat lagi.');
                return redirect()->action('UserController@index');
            }
        } 
    }
}
