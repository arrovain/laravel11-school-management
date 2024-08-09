<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;



class AdminController extends Controller
{
          public function index()
          {
            return view('admin.login');
          }

          public function dashboard()
          {
            return view('admin.dashboard');
          }
          public function form()
          {
            return view('admin.form');
          }
          public function authenticate(Request $req)
          {

            $req->validate([
                'email'=>'required',
                'password'=>'required'
            ]);
            if(Auth::guard('admin')->attempt(['email'=>$req->email,'password'=>$req->password]))
            {

            }
            else {
                return redirect()->route('admin.login')->with('error','something went wrong');
            }
          }

          public function table()
          {
            return view('admin.table');
          }
          public function register()
          {
            $user = New User();
            $user->name = 'Admin';
            $user->role = 'admin';
            $user->email = 'admin@gmail.com';
            $user->password = Hash::make('admin');
            return redirect()->route('admin.login')->with('success', 'user created successfully');

          }
        }