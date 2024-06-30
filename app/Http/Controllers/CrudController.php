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
// dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required',
        ]);
        dd( $validatedData);
        $data = new Information();
        $data->Name = $request['name'];
        $data->Email = $request['email'];
        $data->Address = $request['address'];
        $data->Phone = $request['phone'];
        $data->save();
        
        


       return redirect('/crud')->with('success', 'Data inserted successfully!');
    }
    // public function read(Request $request){
    //     $readOperation = Information::all();
    //     dd($readOperation);
}

