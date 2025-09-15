<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


route::get('index' , [StudentController::class, 'index' ]);
Route::post('store' , [StudentController::class , 'store']);
Route::put('update' , [StudentController::class , 'update']);
Route::delete('delete' , [StudentController::class , 'delete']);
