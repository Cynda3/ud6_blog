@extends('layouts.app')

@section('content')
<br>
  <!-- Page Content -->
  <div class="container">
  <a href= "{{route('post.create')}}"><button type="button" class="btn btn-secondary">New Post</button></a><br><br>
  

  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th style="width:15px">Roles</th>
      </tr>
      </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>
          @foreach($user->roles as $role)
            <a title="Ver" href="">{{$role->name}}</a>
          @endforeach
        </td>
      </tr>
      @endforeach
    </tbody>
    </table>
  </div>
  <!-- /.container -->

  @endsection