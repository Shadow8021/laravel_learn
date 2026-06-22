<?php

use App\Http\Controllers\eleveController;
use App\Http\Controllers\livreController;
use App\Http\Controllers\postController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/add',[eleveController::class,'index']);

Route::get('/livre', [livreController::class,'index']);
Route::get('/posts',[postController::class,'index']);