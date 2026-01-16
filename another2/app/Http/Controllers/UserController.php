<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        
    }
    public function login(Request $request){
        $request->validate([
            "email"=> "required|email",
            "password"=> "required"
        ]);

        return "Data is Valid";
    }
}
