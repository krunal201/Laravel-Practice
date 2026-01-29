<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function showAllEvent(){
        $data=DB::table('events')->get();
        return view("events",compact('data'));
    }
}
