<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
     public function index()
    {
        if (Gate::denies('access-dashboard')) {
            return redirect('/');
        }

        return view('dashboard');
    }
}
