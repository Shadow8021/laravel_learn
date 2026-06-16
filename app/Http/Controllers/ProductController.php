<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
 public function getUser($nom){
    return [
        "Nom"=>"OYAGA",
        "Email"=>"gregoyaga@gmail.com",
        "Age"=>"12",
        "param"=>$nom
    ];
    }
}
