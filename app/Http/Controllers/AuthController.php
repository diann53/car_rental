<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }
    public function login() {
        return view('login');
    }

    public function signup(Request $request){
        //dd($request);
        User::create([
            'username' => $request->username,
            'name' => ucwords(strtolower($request->username)),
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'roles_id' => $request->roles_id
        ]);
        return redirect()->route('login');
    }
    public function signin(Request $request){
        $check = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if($check){
            if(auth()->user()->roles_id == 1){
                return redirect()->route('admin.request');
            } else{
                return redirect()->route('home');
            }
        } else {
            return back();
        }
    }

     public function logout() {
        session()->flush();
        auth()->logout();
        return redirect()->route('login');
     }

}
