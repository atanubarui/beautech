<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Frontc;
use App\Http\Controllers\Lform;
Route::get("/dashboard",[Admin::class,"dashboard"])->middleware("auth");
Route::get("/add-service",[Admin::class,"add_service"])->middleware("auth");
Route::post("/ins-product",[Admin::class,"ins_product"])->middleware("auth");
Route::get("/listservices",[Admin::class,"listservices"])->middleware("auth");

Route::get("/login",[Admin::class,"login"]);

//Route::get("/login_form",[Admin::class,"login_form"]);


Route::post("/login_check",[Admin::class,"login_check"]);

Route::get("/logout",[Admin::class,"logout"]);

Route::get("/",[Frontc::class,"home"]);

Route::post("/booking",[Frontc::class,"book"]);
Route::get("/slist",[Admin::class,"slist"]);


/*Route::get("/login_form", function(){
    return view("login_form");
});*/


//login form url--
//Route::get("/login",[Lform::class,"login"]);
Route::get("/register",[Lform::class,"register"]);
Route::get("login_form",[Lform::class,"login"]);
Route::get("/about",[Lform::class,"about"]);
Route::get("/services",[Lform::class,"services"]);
Route::get("/contact",[Lform::class,"contact"]);
Route::get("/gallery",[Lform::class,"gallery"]);

?>