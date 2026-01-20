<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view("users");
    }

    public function getData(){
        $user=User::get();
        return view("users",compact("user"));
    }

    public function PageList(){
        $user=User::paginate(5);
        return view("users",compact("user"));
    }
}
