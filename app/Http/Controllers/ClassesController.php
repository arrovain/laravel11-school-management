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

 public function read (){
    return view('admin.class.class_list');
}

public function edit ($id){
    $data['class'] = Classes::find($id);
    return view('admin.class.edit_class', $data);
}

public function update (Request $request){

    $data = Classes::find($request->id);
    $data->name = $request->name; 
    $data->update();  
    return redirect()->route('class.update')->with('success', 'Class updated sauccessfully' );

}


public function delete($id)
{
    $data = Classes::find($id);
    $data-> delete();
    return redirect()->route('class.delete')->with('success', 'Class deleted successfully' );


}



}

