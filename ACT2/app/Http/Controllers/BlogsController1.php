<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController1 extends Controller
{
    
   private  $posts = [
        '1'=> [
            'key' => '',
            'Blog Title' => '',
            'Date' => '',
            'Subtitle' => '',
            'Content' => ''
        ],
        '2'=> [
            'key' => '',
            'Blog Title' => '',
            'Date' => '',
            'Subtitle' => '',
            'Content' => ''
        ],
        '3'=> [
            'key' => '',
            'Blog Title' => '',
            'Date' => '',
            'Subtitle' => '',
            'Content' => ''
        ],
        '4'=> [
            'key' => '',
            'Blog Title' => '',
            'Date' => '',
            'Subtitle' => '',
            'Content' => ''
        ],
        '5'=> [
            'key' => '',
            'Blog Title' => '',
            'Date' => '',
            'Subtitle' => '',
            'Content' => ''
        ],
        '6'=> [
            'key' => '',
            'Blog Title' => '',
            'Date' => '',
            'Subtitle' => '',
            'Content' => ''
        ],
        '7'=> [
            'key' => '',
            'Blog Title' => '',
            'Date' => '',
            'Subtitle' => '',
            'Content' => ''
        ]


        ];
    public function index()
    {
       return view('blogs.index',['posts'=>$this -> $posts]);
    }

    
    public function create()
    {
        return view('blogs.create');
    }

    
    public function store(Request $request)
    {
        $key = Request()->input('key');
        $title = Request()->input('title');
        $date = Request()->input('date');
        $subtitle = Request()->input('subtitle');
        $content = Request()->input('content');
        $post = ['title'=> $title, 'content'=>$content, 'isnew'=>true, 'hascomments'=>false];
        return view('blogs.store',['title'->$title]);
    }

    
    public function show($id)
    {
      abort_if(!(isset ($this->posts[$id])),404);
      return view('blogs.show',['post'->$this->post[$id]]);
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
