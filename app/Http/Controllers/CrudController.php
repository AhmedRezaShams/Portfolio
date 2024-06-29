<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class CrudController extends Controller
{
    public function crud(Request $request){
        
        $tableitem = Information::all();
        dd($tableitem);
       // return view("crudworks.crud");
    }
    // public function read(Request $request){
    //     $readOperation = Information::all();
    //     dd($readOperation);
}

