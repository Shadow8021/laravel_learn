<?php

use App\Http\Controllers\eleveController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/add',[eleveController::class,'index']);