@extends('layouts.app')

@section('content')


  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-8">
        <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1>
        <!-- Author -->
        <p class="lead">
          by
          <a href="#">User: {{$post->user_id}}</a>
        </p>
        <hr>
        <!-- Date/Time -->
        <p>{{$post->published_at}}</p>
        <hr>
        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{$post->image}}" alt="">
        <hr>
        <!-- Post Content -->
        <p class="lead">{{$post->excerpt}}</p>
        <p>{{$post->body}}</p>
        <hr>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

@endsection('content')

