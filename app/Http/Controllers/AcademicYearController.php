<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
{
 public function index(){
    return view('admin.academic_year');
 }


 public function store(Request $request){
    $request->validate([
        'name' => 'required'
    ]);
    $data = new AcademicYear();
    $data -> name = $request->name;
    $data->save();
    return redirect()->route('academic-year.create')->with('success', 'academic year added successfully' );
 }

 public function read(){
    $data['academic_year'] = AcademicYear::get();

    dd($data);
 }
}
