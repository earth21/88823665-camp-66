<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "<h1>Happy very much!</h1>";
});

Route::get("/mylaravel/{id?}", 
[MyController::class,'myfunction']);

Route::post("/mylaravel/{id?}", 
[MyController::class,'myfunction']);