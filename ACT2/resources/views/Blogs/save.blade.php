@extends('layouts.layout')
@section('title', 'save')
@section('content')
<h1> {{ $post ['key']}} </h1>
 <h1> {{ $post ['Blog title']}} </h1>
 <h1> {{ $post ['Date']}} </h1>
 <h1> {{ $post ['subtitle']}} </h1>
 <h1> {{ $content ['content']}} </h1>
@endsection