<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login_res extends Controller
{
    public function index(){
        return view('frontend.login_res');
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



    public function login(){

      $validate =request()->validate([
            'phone'=>'required|min:11|max:11',
            'password'=>'required'
        ]);



      if( Auth::attempt([
          'phone'=>request('phone'),
          'password'=>request('password')
      ])){

          if(Auth::check()){
              $users= User::where('id',Auth::id())->get();

              if($users->count() >=1){
                  return  dd($users);
              }

          }
      }else {
          return redirect(route('login'))->with('failed','Phone and password Not matched');
      }


    }





    public function logout(){
        auth::logout();
        return redirect(route('home'));
    }
}
