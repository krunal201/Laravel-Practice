<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
use App\Models\Categories;
use App\Models\Events;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[DashBoardController::class,'index'])->name('dashboard');
// Route::view("/dashboard","dashboard")->name('dashboard');
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
// Route::view("/events","events")->name('events');
Route::get("/event",[EventController::class,'index'])->name('events.event');
Route::get("/events",[EventController::class,'showAllEvent'])->name("event.AllEvents");
Route::get("/recentevents",[EventController::class,'recentEvent'])->name("event.recentEvents");

//Add Events
Route::view("/upload","uploadevent");
Route::post("/upload",[EventController::class,'addEvent'])->name('event.uploadEvent');

//Update Events
Route::get('/updateEvent/{id}',[EventController::class,'updateEventView'])->name('event.updateEventView');
Route::put("/updateEvent/{id}",[EventController::class,'updateEvent'])->name('event.updateEvent');
//Delete Events
Route::delete('/deleteevent/{id}',[EventController::class,'deleteEvent'])->name('event.deleteEvent');

//Search Event
Route::get('/search',[EventController::class,'searchEvent'])->name('event.searchEvent');

//User
// Route::view("/users","users")->name('user.users');
Route::get('/users',[UserController::class,'index'])->name('user.users');
Route::get('/reguser',[UserController::class,'registerdUser'])->name('user.rgusers');

//Registration
Route::get("/registrations",[RegistrationController::class,'index'])->name('registration');
Route::post("/registrations",[RegistrationController::class,'filterReg'])->name('registration.filter');
Route::get("/recentregistration",[RegistrationController::class,'recentReg'])->name("registration.recent");


//livewire
Route::view('/dish', 'demo')->name('dish-table'); 

//Export CSV
Route::get('/export',[ExportController::class,'exportCSV'])->name('export.csv');
Route::get('/exports',[ExportController::class,'exportExcel'])->name('export.excel');