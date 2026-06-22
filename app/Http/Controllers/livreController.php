<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class livreController extends Controller
{
    //
    public function index(){
        $livre = new Livre();
        $livre->titre= 'la rivive de nobo';
        $livre->auteur="matial";
        $livre->save();
    }
}
