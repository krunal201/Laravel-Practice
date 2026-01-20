<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

// Route::get('/r', function () {
//     return view('reg');
    
// });

Route::view('/reg','reg')->name("reg");

Route::post("/reg",[UserController::class,"register"])->name("register");

Route::view('/login','Login');
Route::view('/dashboard','dashboard')->name("dashboard");

Route::post("/login",[UserController::class,"login"])->name("check");


Route::get("/log",[UserController::class,"loggedIn"])->name("login1");
Route::get("/lg",[UserController::class,"logOut"])->name("logout");

Route::get("/show",[PostController::class,"show"])->name("show");
Route::get("/post",[PostController::class,"update"])->name("post-update");

Route::get("/product",[ProductController::class,"show"])->name("prod");

/*
Route::get("/R",[LoginController::class,"reg"]);


Route::get("/L",[LoginController::class,"index"]);
Route::post("/Login",[LoginController::class,"login"])->name("log");
*/