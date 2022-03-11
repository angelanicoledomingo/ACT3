@extends('layouts.mainlayout')
@section('title', 'create')
@section('content')
<div>
<form action="/Blogs" action='post'>
    @csrf
Key: <input type="text" name="key" id="key"/> <br />
Blog Title:<input type="text" name="blog title" id="blog title"/> <br />
Date:<input type="text" name="date" id="date"/> <br />
Subtitle:<input type="text" name="subtitle" id="subtitle"/> <br />
Content:<input type="text" name="content" id="content"/> <br />
    <input type="submit"value="save"/> <br />
    
</form>
     
</div>
@endsection


