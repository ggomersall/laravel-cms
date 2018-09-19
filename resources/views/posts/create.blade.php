@extends('layouts.app')

@section('content')
<h1>edit post</h1>

  <form action="/posts" method="post">
    <input type="text" name="title" placeholder="Enter Post Title">
    <textarea name="body" id="" cols="30" rows="10" placeholder="Enter Post Body"></textarea>
    
    <input type="submit" name="submit">
    {{ csrf_field() }}
  </form>

@endsection


