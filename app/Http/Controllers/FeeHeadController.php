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

        echo "ok";

    }
}
