<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/dashboard","dashboard")->name('dashboard');
Route::view("/login","login");
Route::post("/login",[AdminController::class,'login'])->name('login');

Route::view('/reset',"resetpassword");
Route::put("/reset",[AdminController::class,'resetPassword'])->name('reset');
Route::post("/logout",[AdminController::class,'logout'])->name('logout');

//Event routes
Route::view("/events","events")->name('events');
Route::get("/event",[EventController::class,'showAllEvent'])->name("AllEvents");


//User
Route::view("/users","users")->name('users');

//Registration
Route::view("/registrations","registrations")->name('registration');

