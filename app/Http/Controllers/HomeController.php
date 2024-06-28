<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request) {
     
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if(\Auth::attempt($request->only('email','password'))){
            //dd('login success');
            return redirect('dashboard');
    
        }
        return redirect('login')->withError('émail or pass is not valid');
    }
}
