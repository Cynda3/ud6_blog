@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<div class="container">
  <form method="POST" action="{{route('post.update', $post->id)}}">
    @csrf
    
    @method('PUT')
    Title: <input type="text" name="title" placeholder="{{$post->title}}"><br>
    Excerpt: <input type="text" name="excerpt" placeholder="{{$post->excerpt}}"><br>
    Body: <input type="text" name="body" placeholder="{{$post->body}}"><br>
    Image: <input type="file" name="image" placeholder="{{$post->image}}"><br>

    <button type="submit">Update Post</button>
  </form><br>
</div>
@endsection