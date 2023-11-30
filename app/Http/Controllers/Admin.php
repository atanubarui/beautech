<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\booking;
class Admin extends Controller
{
    public function dashboard(){

        //  $obj=new User();
        //  $obj->name="Jack";
        //  $obj->email="p@gmail.com";
        //  $obj->password=bcrypt("1234");
        //  $obj->save();
        return view("admin/dashboard");
    }
    public function add_service(){
        return view("admin/add-product");
    }
    public function ins_product(Request $r){

        $sn=$r->sname;
        $sc=$r->scharge;
        $sd=$r->sdetails;

        echo $sn;

        $fl=$r->file("simg");
        if(isset($fl)){
              $fn=time().$fl->getClientOriginalName();
              $fl->move("service_img",$fn);
        }
        $obj=new services();
        $obj->sname=$sn;
        $obj->scharge=$sc;
        $obj->sdetails=$sd;
        $obj->simg=$fn;
        $obj->save();

        return redirect(url('listservices'));
    }
        public function listservices()
        {
            $obj=services::all();
            return view("admin/listservices")->with(["srv"=>$obj]);
        }


        public function login(){

            return view("admin/login");

        }

        public function login_check(Request $r){
          
            $e=$r->email;
            $p=$r->pass;

           if(Auth::attempt(["email"=>$e,"password"=>$p])){
            return redirect(url('/dashboard'));
           }else{
            
            return redirect(url('/login'))->with(["err"=>"Invalid Login"]);

           }

            

        } 


        public function logout(){
            Auth::logout();
            return redirect(url('/login'));
        }



        

        public function slist(){
            $obj=booking::all();

            return view("slist")->with(["ser"=>$obj]);

        }

}