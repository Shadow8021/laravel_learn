<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    //
    public function index(){
        $id=1;
        $post = post::whereBetween('id',['20', '22'])->get();
        return $post;
    }

}
