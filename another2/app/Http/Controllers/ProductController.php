<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function show(){
        $pr=DB::table('product')->get();
       return view("product",compact("pr"));
    }

    public function edit(){
        // DB::table("product")->where()->update(['price']=>"500");
    }
}
