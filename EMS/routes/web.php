<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
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
Route::get("/categories",[CategoryController::class,'listAllCatgory'])->name('category.list')->middleware('admin');

Route::get("/addcategories",[CategoryController::class,'addCategoryView'])->name('category.view')->middleware('admin');
Route::post("/categories",[CategoryController::class,'addCategory'])->name('category.add')->middleware('admin');

//Update Category
Route::get("/updatecategories/{id}",[CategoryController::class,'updateCategoryView'])->name('category.uView')->middleware('admin');
Route::put("/updatecategories/{id}",[CategoryController::class,'updateCategory'])->name('category.edit')->middleware('admin');

//Delete Category
Route::delete("/deletecategories/{id}",[CategoryController::class,'deleteCategory'])->name('category.delete')->middleware('admin');

//Event routes
// Route::view("/events","events")->name('events');
Route::get("/event",[EventController::class,'index'])->name('events.event')->middleware('admin');
Route::get("/events",[EventController::class,'showAllEvent'])->name("event.AllEvents")->middleware('admin');
Route::get("/recentevents",[EventController::class,'recentEvent'])->name("event.recentEvents")->middleware('admin');

//Add Events
Route::view("/upload","uploadevent")->middleware('admin');
Route::post("/upload",[EventController::class,'addEvent'])->name('event.uploadEvent')->middleware('admin');

//Update Events
Route::get('/updateEvent/{id}',[EventController::class,'updateEventView'])->name('event.updateEventView')->middleware('admin');
Route::put("/updateEvent/{id}",[EventController::class,'updateEvent'])->name('event.updateEvent')->middleware('admin');
//Delete Events
Route::delete('/deleteevent/{id}',[EventController::class,'deleteEvent'])->name('event.deleteEvent')->middleware('admin');

//Search Event
Route::get('/search',[EventController::class,'searchEvent'])->name('event.searchEvent')->middleware('admin');

//User
// Route::view("/users","users")->name('user.users');
Route::get('/users',[UserController::class,'index'])->name('user.users')->middleware('admin');
Route::get('/reguser',[UserController::class,'registerdUser'])->name('user.rgusers')->middleware('admin');

//Registration
Route::get("/registrations",[RegistrationController::class,'index'])->name('registration')->middleware('admin');
Route::post("/registrations",[RegistrationController::class,'filterReg'])->name('registration.filter')->middleware('admin');
Route::get("/recentregistration",[RegistrationController::class,'recentReg'])->name("registration.recent")->middleware('admin');


//livewire
Route::view('/dish', 'demo')->name('dish-table'); 

//Export CSV
Route::get('/export',[ExportController::class,'exportCSV'])->name('export.csv');
Route::get('/exports',[ExportController::class,'exportExcel'])->name('export.excel');

Route::view('/abort','403')->name('abort');

Route::fallback(function(){
    return view('404');
});


/*
Route::middleware(['admin'])->group(function () {
    Route::get('/admin/categories', [CategoryController::class,'listAllCatgory'])->name('admin.categories');
});*/