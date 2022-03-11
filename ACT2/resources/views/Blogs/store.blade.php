@extends('layouts.mainlayout')
@section('title', 'new blog')
@section('content')
<div>
key:{$post {['key']}}
<br />
new blog title:{$post {['title']}}
<br />
date:{$post {['date']}}
<br /> 
Subtitle:{$post {['Subtitle']}}
<br />
content:{$post {['content']}}
</div>
@endsection


