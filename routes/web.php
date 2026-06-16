<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Contracts\Support\Responsable;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{id}',function($id){
    $users =[
    1=>["noms"=>"John doe", "email"=>"johndeo@gmail.fr","age"=>"15"],
    2=>["noms"=>"shadow", "email"=>"shadow@gmail.fr","age"=>"18"],
    3=>["noms"=>"oko", "email"=>"oko@gmail.fr","age"=>"19"],
];
return $users[$id];
});