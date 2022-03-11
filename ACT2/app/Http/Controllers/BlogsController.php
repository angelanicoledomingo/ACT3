<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{

    public function talk(){
        return view('blogs.index');
    }
public function save(Request $r){
    $title = Request() ->input('title');
    $content = Request() ->input('content');
    $post =['title' =>$title, 'content' =>$content];
    return view('blogs.save',['post'=>$post]);
}
}
