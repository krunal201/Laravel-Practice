<?php

use App\Http\Controllers\HideController;
use App\Http\Controllers\MailController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/f','first');

Route::get('/s',[MailController::class,'send'])->name('mailC');

Route::get('/sen',function(){
    $name = 'John';
    Mail::to('kaxatas348@gopicta.com')->send(new TestMail($name));
    return "Email sent";
});

Route::view("/aj","second");
Route::view("/ajax","ajp");

Route::get("/encrypt/{st}",[HideController::class,"enc"])->name("encrypt");
Route::get("/decrypt/{st}",[HideController::class,"dec"])->name("decrypt");
