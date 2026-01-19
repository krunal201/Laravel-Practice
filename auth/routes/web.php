<?php

use App\Http\Controllers\authentication;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/form','form');

Route::post('/form',[authentication::class,'up'])->name('up');