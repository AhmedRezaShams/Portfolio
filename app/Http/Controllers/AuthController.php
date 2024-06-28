<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function home() {
        return view('initialpage');
        
    }
    public function login_success() {
    return view('home.index');
    }

    public function login() {
        return view('auth.login');
    }
    public function register()  {
        return view('auth.register');
    }
    public function register_done(Request $request)  {
        $request -> validate([
            'name'=> 'required',
            'email' => 'required|unique:users|email',
            'password'=>'required|',
            
        ]);
        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> hash::make($request->password)
        ]);
        if (\Auth::attempt($request->only('email','password'))) {
            return redirect('dashboard');
            # code...
        }
        return redirect('register')->withError('error');
    }
    public function logout(){
        \Session::flush();
        \Auth::logout();
        return view('initialpage');
        
    }
    
}
