<?php

namespace App\Http\Controllers;

use App\Models\Classes;


use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index (){
        return view('admin.class.class');
    }

    
 public function store(Request $request){
    $request->validate([
        'name' => 'required'
    ]);
    $data = new Classes();
    $data -> name = $request->name;
    $data->save();
    return redirect()->route('class.create')->with('success', 'Class added successfully' );
 }
}

