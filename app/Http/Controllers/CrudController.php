<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
   public function index(){

    $cruds = crud::all();
    return view('Crud.index',compact('cruds'));
   } 

   public function create(){
      return view('Crud.create');
   }

   public function store(Request $request)
{
    // Validation
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'city' => 'required',
    ]);
      
    // Insertion 
    Crud::create($validatedData);

    return redirect()->route('Crud.index');
}


   public function destroy(Crud $crud){
     
      $crud->delete();
      return to_route('Crud.index');
   }

   
   public function edit(Crud $crud){

      return view('crud.edit',compact('crud'));
   }

   public function update(Crud $crud ,Request $request){

       //validation
       $validatedData = $request -> validate([
         'name' => 'required',
         'email' => 'required',
         'city' => 'required',
      ]);
     
      $crud ->fill($validatedData)->save();

      return to_route('Crud.index');
   }
   
   
}

