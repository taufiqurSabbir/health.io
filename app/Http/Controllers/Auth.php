<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Auth extends Controller
{
    public function index(){
        return view('frontend.login_res');
    }

    public function login(){
        dd(request());
        }

    public function registration(){
            request()->validate([
                'name'=> 'required',
                'phone' => 'required|numeric|unique:users',
                'password' => 'required',
                'role' => 'required'
            ]);
           User::create([
               'name' => request('name'),
               'phone' => request('phone'),
               'password' => bcrypt(request('name')) ,
               'role' => request('role'),
           ]);
           return redirect(route('login'))->with('success', 'Registration Successful');
    }
}
