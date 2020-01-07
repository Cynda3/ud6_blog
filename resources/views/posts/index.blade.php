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
        <th>Title</th>
        <th>Fecha/Hora</th>
        <th style="width:15px">Ver</th>
        <th style="width:15px">EDitar</th>
        <th style="width:15px">Eliminar</th>
      </tr>
      </thead>
    <tbody>
      @foreach ($posts as $p)
      <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->title}}</td>
        <td>{{date("j/m/Y H:i:s", strtotime($p->published_at))}}</td>
        <td>
        <a title="Ver" href="{{route ('post.show',$p->id)}}">Ver</a>
        </td>
        <td>
          <a title="Editar" href="{{route ('post.edit',$p->id)}}">Editar</a>
        </td>
        <td>
        <form style="display:inline" action="{{ route('post.destroy',$p->id) }}" method="POST">
           {{ method_field('DELETE') }}
           {{ csrf_field() }}
           <button type="submit" id="delete" style="background: none;padding: 0px;border: none;color:red">
             DElete
            </button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
    </table>
  </div>
  <!-- /.container -->

  @endsection