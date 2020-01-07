@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<div class="container">
  <form method="POST" action="{{route('post.store')}}">
    @csrf
    Title: <input type="text" name="title"><br>
    Excerpt: <input type="text" name="excerpt"><br>
    Body: <input type="text" name="body"><br>
    Image: <input type="file" name="image"><br>

    <button type="submit">Create Post</button>
  </form><br>
</div>
@endsection