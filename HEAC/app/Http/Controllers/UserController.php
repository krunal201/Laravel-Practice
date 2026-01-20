<?php

namespace App\Http\Controllers;

use App\Events\TestingEvent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class UserController extends Controller
{
    public function index(){
        return view("users");
    }

    public function register(Request $request){
        $valid=$request->validate([
            "name"=>"required",
            "email"=>"required|email",
            "password"=>"required"
        ]);

        $userdata=User::create($valid);
        if($userdata){
            Event(new TestingEvent($userdata));
            // return "register";
        }else{
            return "can't register";
        }
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
