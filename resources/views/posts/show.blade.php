@extends('layouts.app')

@section('content')

  <h1>{{$post->title}}</h1>
  <p>{{$post->body}}</p>

  <p>
    <a href="{{route('posts.edit', $post->id)}}">
      edit post
    </a>
  </p>

  
@endsection

 