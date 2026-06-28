<?php

use App\Http\Controllers\eleveController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\livreController;
use App\Http\Controllers\postController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', [homeController::class, 'index']);

Route::get("/about",[homeController::class, 'about']);

Route::get('/contact',[homeController::class, 'contact']);

Route::get('/blog',[homeController::class, 'blog']);
