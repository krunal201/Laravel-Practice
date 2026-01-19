<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    // public function index(){
    //     return view("reg");
    // }

    public function register(Request $request)
    {
        //echo csrf_token();
        // $valid['password']=Hash::make($request->password);
        $valid = $request->validate([
            "name" => "required",
            "email" => "required|email",
            "password" => "required"
        ]);

        $user = User::create($valid);
        if ($user) {
            return view("welcome");

        } else {
            return view("welcome");
        }
    }

    public function login(Request $request)
    {
        $validate['password'] = Hash::make($request->password);
        $validate = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (Auth::attempt($validate)) {
            return $request->all();
        } else {
            return view('welcome');
        }
    }

    public function loggedIn()
    {
        if (Auth::check()) {
            return view("dashboard");
        }else{
            return redirect()->route("register");
        }
    }

    public function logOut(){
        Auth::logout();
        return redirect('/');
    }
}
