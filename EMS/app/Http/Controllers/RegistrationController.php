<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Registration;
use DB;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        $reg=DB::table('registrations')->rightJoin('events','registrations.event_id','=','events.id')->get();
        return view('registrations',compact('reg'));
    }

    public function filterReg(Request $request){
        $fil=$request->get('fil');
        // $reg=DB::table('registrations')->rightJoin('events','registrations.event_id','=','events.id')->where('events.title','=',$request->get("fil"));

        $qry=DB::table('registrations')->rightJoin('events','registrations.event_id','=','events.id');
        
        if($fil){
            $qry->where('events.title','=',$fil);
        }
        
        $reg=$qry->select('registrations.*','events.title as title')->get();
        return view('registrations',compact('reg'));
    }

    //Recent Registration
    public function recentReg()
    {
        $start_date = date('Y-m-d 00:00:00', strtotime('-30 days'));
        $end_date = date('Y-m-d 23:59:59');
        $recent = Registration::whereBetween('created_at', [$start_date, $end_date])->get();
        return view('recentreg', compact('recent'));
    }
}
