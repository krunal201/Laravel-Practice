<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Models\Categories;
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


//Category Routes
// Route::view("/categories","categories");
Route::get("/categories",[CategoryController::class,'listAllCatgory'])->name('category.list');

Route::get("/addcategories",[CategoryController::class,'addCategoryView'])->name('category.view');
Route::post("/categories",[CategoryController::class,'addCategory'])->name('category.add');

//Update Category
Route::get("/updatecategories/{id}",[CategoryController::class,'updateCategoryView'])->name('category.uView');
Route::put("/updatecategories/{id}",[CategoryController::class,'updateCategory'])->name('category.edit');

//Delete Category
Route::delete("/deletecategories/{id}",[CategoryController::class,'deleteCategory'])->name('category.delete');

//Event routes
Route::view("/events","events")->name('events');
Route::get("/event",[EventController::class,'showAllEvent'])->name("AllEvents");


Route::view("/upload","uploadevent");
Route::post("/upload",[EventController::class,'addEvent'])->name('uploadEvent');

//User
Route::view("/users","users")->name('users');

//Registration
Route::view("/registrations","registrations")->name('registration');

