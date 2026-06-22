<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    //
    public function index(){
        $post = new post();
        $post->titre="post 1";
        $post->description="post 1 description";
        $post->save();
        return $post;
    }
}
