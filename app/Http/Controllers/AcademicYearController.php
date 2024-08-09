<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
{
 public function index(){
    return view('admin.academic_year');
 }
}
