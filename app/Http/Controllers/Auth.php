<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    public function index(){
        return view('frontend.login_res');
    }

    public function login(){
        dd(request());
        }
}
