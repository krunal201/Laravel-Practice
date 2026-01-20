<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $valid = $request->validate([
            "name" => "required",
            "email" => "required|email",
            "password" => "required"
        ]);

        $user = User::create($valid);
        if ($user) {
            return view("Login");
        } else {
            return view("welcome");
        }
    }

    public function login(Request $request)
    {
        $validate = $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        if (
            Auth::attempt([
                'email' => $request->email,
                'password' => $request->password
            ])
        ) {
            return redirect()->route('login1');
        } else {
            // return "Not Valid";
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    public function loggedIn()
    {
        if (Auth::check()) {
            return redirect()->route("dashboard");
        } else {
            return redirect()->route("register");
        }
    }

    public function logOut()
    {
        Auth::logout();
        return redirect('/');
    }
}
