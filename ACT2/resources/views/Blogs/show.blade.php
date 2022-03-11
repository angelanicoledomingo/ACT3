@extends('layouts.mainlayout')
@section('title', $posts['title'])
@section('content')
<div>
<h1> {{ $post ['key']}} </h1>
 <h1> {{ $post ['Blog title']}} </h1>
 <p> {{ $post ['Date']}} </p>
 <h2> {{ $post ['subtitle']}} </h2>
 <p> {{ $content ['content']}} </p>
     <br />
     No of Pages: {{ $posts['noofpages']}}
     <br />
     @if ($posts[isnew])
     <span>This is a new blog</span>
     @else 
     <span> This is an old blog</span>
     @endif

     @unless($post['isnew'])
     <span> Using unless, this is an old blog</span>

     @isset($post['hascomments'])
     @if ($post['hascomments'])
     <h5> this post has comments </h5>
     @else
     <h5> this post has no comments</h5>
     @endif
     @endisset

     
</div>
@endsection


