<?php

namespace App\Http\Controllers;
use App\Models\services;

use App\Models\booking;
use Illuminate\Http\Request;

class Frontc extends Controller
{
    public function home(){

        $obj=services::all();
        return view("home")->with(["srv"=>$obj]);
        
    }
    public function book(Request $r){


        $n=$r->name;
        $e=$r->email;
        $c=$r->contact;
        $a=$r->address;
        $sn=$r->sn;

        $obj=new booking();
        $obj->name=$n;
        $obj->email=$e;
        $obj->phone=$c;
        $obj->address=$a;
        $obj->service_id=$sn;

        $obj->save();

        return view("thanks");
        

    }
}
