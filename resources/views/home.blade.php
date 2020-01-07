@extends('layouts.app')

@section('content')
<br>
  <!-- Page Content -->
  <div class="container">
    You are logged in!<br>
    NAme: {{Auth::user()->name}}<br>
    Role:<br>
    @foreach(Auth::user()->roles as $role)
     {{$role->name}}<br>
    @endforeach
  </div>
  <!-- /.container -->

@endsection
