<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //Add Events
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

        return redirect('/events');
    }
    
    //Return view for update events
    public function updateEventView($id){
        $event=Events::findOrFail($id);
        return view('updateEvent',compact('event'));
    }
    //Upadte Events
    public function updateEvent(Request $request,$id){

        $event=Events::findOrFail($id);
        $event->title=$request->title;
        $event->description=$request->description;
        $event->category_id=$request->cat_id;
        $event->date=$request->date;
        $event->time=$request->time;
        $event->location=$request->location;

        $filesEx=NULL;
        if($request->hasFile('file')){
            if($event->image && file_exists(public_path('storage/'.$event->image))){
                unlink(public_path('storage/'.$event->image));
            }
            $filesEx=$request->file('file')->store('uploads','public');
            $event->image=$filesEx;
        }


        $event->save();
        return redirect('/events');
    }

    //Delete Event
    public function deleteEvent($id){
        $event=Events::findOrFail($id);
        $event->delete();
        return redirect('/events');
    }

    //Show All Events
    public function showAllEvent()
    {
        $data = DB::table('events')->get();
        return view("events", compact('data'));
    }

}
