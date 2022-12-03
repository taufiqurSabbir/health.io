<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontend extends Controller
{
   public function home(){
       return view('frontend.home');
   }

   public function about(){
       return view('frontend.about');
   }

   public function doctor(){
       return view('frontend.doctor');
   }
}
