<?php

namespace App\Http\Controllers;

use App\Models\eleve;
use Illuminate\Http\Request;

class eleveController extends Controller
{
    //
    public function index(){
        $eleve= new eleve();
        $eleve->nom="OYAGA";
        $eleve->email="shadow@gmail.fr";
        $eleve->status="nouveau";
        $eleve->save();
        return $eleve;
    }
}
