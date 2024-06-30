<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class CrudController extends Controller
{
    public function crud(Request $request){
        
        $tableitem = Information::all();
        return view('crudworks.crud', compact('tableitem'));

       // return view("crudworks.crud");
    }
    public function insert(Request $request)  {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
        ]);
        $data = new Information();
        $data->Name = $validatedData['name'];
        $data->Email = $validatedData['email'];
        $data->Address = $validatedData['name'];
        $data->Phone = $validatedData['email'];
        $data->save();
        dd($data);


       // return redirect('/crud')->with('success', 'Data inserted successfully!');
    }
    // public function read(Request $request){
    //     $readOperation = Information::all();
    //     dd($readOperation);
}

