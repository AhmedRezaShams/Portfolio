<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class CrudController extends Controller
{
    public function crud(Request $request){
        
        $tableitem = Information::all();
       
       
        //$data = Information::findOrFail();

        return view('crudworks.crud', compact('tableitem'));
        // Pass the data to the view
       

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
       // dd( $validatedData);
        $data = new Information();
        $data->Name = $request['name'];
        $data->Email = $request['email'];
        $data->Address = $request['address'];
        $data->Phone = $request['phone'];
        $data->save();
        
        


       return redirect('/crud')->with('success', 'Data inserted successfully!');
    }
    

    public function update(Request $request,$id){
       //dd($id);
        $validatedData = $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'address'=> 'required',
            'phone'=> 'required'
        ]);
        //dd($validatedData);
        $data = Information::findOrFail($id);
        $data->Name = $validatedData['name'];
        $data->Email = $validatedData['email'];
        $data->Address = $validatedData['address'];
        $data->Phone = $validatedData['phone'];
        $data->save();

        //Redirect with success message
       return redirect()->route('crud', $id)->with('success', 'Data updated successfully!');
        
   
            }        // public function read(Request $request){
    //     $readOperation = Information::all();
    //     dd($readOperation);
}

