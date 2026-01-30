<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function addEvent(Request $request)
    {
        Events::create([
            "title" => $request->title,
            "description" => $request->description,
            "category_id" => $request->cat_id,
            "date" => $request->date,
            "time" => $request->time,
            "location" => $request->location,
            "image" => $request->file('file')->store('uploads', 'public'),
        ]);
    }
    
    public function showAllEvent()
    {
        $data = DB::table('categories')->get();
        return view("events", compact('data'));
    }

}
