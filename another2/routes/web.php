<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/r', function () {
    return view('reg');
});

Route::post("/reg",[UserController::class,"register"])->name("register");
Route::post("/check",[UserController::class,"login"])->name("check");