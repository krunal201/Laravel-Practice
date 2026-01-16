<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User1;

class UserController extends Controller
{
    public function register(Request $request){
        $valid=$request->validate([
            "name"=>"required",
            "email"=> "required|email",
            "password"=> "required"
        ]);

        $valid['password']=Hash::make($request->password);

        $user=User1::create($valid);
        if($user){
            return view("Login");

        }else{
            return view("welcome");
        }
    }

    public function login(Request $request){
        $valid=$request->validate([
            "email"=> "required|email",
            "password"=> "required"
        ]);

        if(Auth::attempt($valid)){
            return "Data is valid";
        }
        return "Data is not valid";
    }
}
