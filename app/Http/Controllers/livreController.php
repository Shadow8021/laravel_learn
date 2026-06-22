<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class livreController extends Controller
{
    //
    public function index(){
        $livre = Livre::create([
            'titre'=>"naruto",
            'auteur'=>"bototo"
        ]);
    }
}
