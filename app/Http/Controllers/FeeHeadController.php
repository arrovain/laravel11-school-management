<?php

namespace App\Http\Controllers;

use App\Models\FeeHead;
use Illuminate\Http\Request;




class FeeHeadController extends Controller
{
    public function index(){
        return view('admin.fee-head.fee-head');
    }

    public function store(Request $request){

      $request->validate(
        [
            'name' => 'required'


        ]
        );
  
        $fee = new FeeHead();
        $fee->name=$request->name;
        $fee->save();
        return redirect()->route('fee-head.create'->with('success','Fee Head added successfully'));
    }


    public function read(){

        $data['fee'] = FeeHead::latest()->get();
        return view('admin.fee-head.fee-headlist', $data);

    }
  
}
