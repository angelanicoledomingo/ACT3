@extends('layouts.mainlayout')
@section('title', 'All Posts')
@section('content')
     @forelse($posts as$key =>$posts)
     <@include('post.items')
     <br />
     <p>{{$posts['content'] }}</p>
     <br />
     No of Pages: {{ $posts['noofpages']}}
     <br />
     @if ($posts[isnew])
     <span>This is a new blog</span>
     @else 
     <span> This is an old blog</span>
     @endif
     @empty
     <h1> NO BLOG! </h1>
     @endforelse
@endsection


