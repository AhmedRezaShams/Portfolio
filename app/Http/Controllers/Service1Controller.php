<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Service1Controller extends Controller
{
    public function service1() {
        return view('service.index');
    }
}
