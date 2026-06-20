<?php

namespace App\Http\Controllers;

use App\Models\shadow;
use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function users(){
        $shadow = new shadow();
        $shadow->nom="OYAGA";
        $shadow->email="greoru@fll.com";
        $shadow->save();
        return $shadow;
        
    }
}
