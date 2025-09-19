<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('reg' ,function(){
       return view('registration');
})->name('reg');


Route::post('login' , [Authcontroller::class,'login']);
Route::post('registration' , [Authcontroller::class , 'registration']);


Route::get('/getdata' , [StudentController::class,'getdata'])->name('UserDashboard');


Route::get('/admindashboard' , function(){
    return view('admindashboard');
})->name('admindashboard');
