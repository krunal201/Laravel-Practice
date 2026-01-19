<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/r', function () {
//     return view('reg');
    
// });

Route::view('/reg','reg')->name("register");

Route::post("/reg",[UserController::class,"register"])->name("register");

Route::view('/login','login');

Route::post("/login",[UserController::class,"login"])->name("check");



Route::get("/log",[UserController::class,"loggedIn"])->name("login");
Route::get("/lg",[UserController::class,"logOut"])->name("logout");

Route::get("/show",[PostController::class,"show"])->name("show");
Route::get("/post",[PostController::class,"update"])->name("post-update");

/*
Route::get("/R",[LoginController::class,"reg"]);


Route::get("/L",[LoginController::class,"index"]);
Route::post("/Login",[LoginController::class,"login"])->name("log");
*/