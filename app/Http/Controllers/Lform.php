<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lform extends Controller
{
   public function login(){
    return view ("login_form");
   }

   public function register(){
    return view ("register_form");
   }

   public function services(){
    return view ("services");
   }

   public function about(){
      return view ("about");
     }

     public function contact(){
      return view ("contact");
     }

     public function gallery(){
      return view ("gallery");
     }
}
