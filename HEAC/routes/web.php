<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/register","normal");
Route::post("/register",[UserController::class,"register"])->name("reg");


// Route::get("/display",[UserController::class,"index"])->name("displayPage");
// Route::get("/display",[UserController::class,"getData"])->name("page");
// Route::get("/paginated",[UserController::class,"PageList"]);


