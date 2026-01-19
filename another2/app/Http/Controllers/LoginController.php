<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view("LoginPage");
    }

    public function reg(Request $request)
    {
        $valid = $request->validate([
            "name"=>"required",
            "email" => "required", "email",
            "password" => "required",
        ]);
        if ($valid) {
            User::create($valid);
        }else{
            return "Fails";
        }
    }
    public function login(Request $request)
    {
        $valid = $request->validate([
            "email" => "required"|"email",
            "password" => "required",
        ]);

        if (Auth::attempt($valid)) {
            return "valid";
        } else {
            return "Not Valid";
        }
    }
}