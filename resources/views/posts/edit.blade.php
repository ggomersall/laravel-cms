@extends('layouts.app')

@section('content')
  <h1>edit post - {{$post->title}}</h1>
  <form action="/posts/{{$post->id}}" method="post">

    {{-- create hidden input to laravel understand post for editing --}}
    <input type="hidden" name="_method" value="PUT">

    <input type="text" name="title" placeholder="Enter Post Title" value="{{$post->title}}">
    <textarea name="body" id="" cols="30" rows="10" placeholder="Enter Post Body">{{$post->body}}</textarea>
    <input type="submit" name="submit" value="SAVE">
    {{ csrf_field() }}
  </form>

  <form action="/posts/{{$post->id}}" method="post">

    {{-- create hidden input to laravel understand post for editing --}}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="DELETE">
    {{ csrf_field() }}
  </form>
@endsection

