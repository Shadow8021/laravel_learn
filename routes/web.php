<?php

use App\Http\Controllers\eleveController;
use App\Http\Controllers\livreController;
use App\Http\Controllers\postController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home.index');
});

Route::get("/about",function(){
    return view('about.index');
});

Route::get('/contact',function(){
    return view('contact.index');
});
Route::get('/blog',function(){
    return view('blog.index');
});