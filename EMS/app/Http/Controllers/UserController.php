<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // $user=DB::table('users')->rightJoin('registrations','users.id','=','registrations.user_id')->get();
        $user=User::all();
        return view("users",compact('user'));
    }

    public function registerdUser(){
        $user=DB::table('users')->rightJoin('registrations','users.id','=','registrations.user_id')->get();
        // $user=User::all();
        return view("registereduser",compact('user'));
    }
}
