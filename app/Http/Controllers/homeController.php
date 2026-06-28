<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function index(){
        return view('home.index');
    }

    public function about(){
        return view('about.index');
    }
    public function contact(){
        return view('contact.index');
    }
    public function blog(){
        return view('blog.index');
    }
    
}
