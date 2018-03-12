@extends('layouts.app')
@section("title","Lista de categorias")
@section("content")
  <div class='row'>
    @foreach($categories as $category)
      <article class="col-md-3 service-grid-agileits service-grid-agileits-top">
          <span class="glyphicon glyphicon-sort-by-attributes" aria-hidden="true"></span>
          <h4>{{$category->name}}</h4>
          <p>{{$category->description}}</p>
          @if( Auth::user()->admin() )
               <a href="{{ url("/categories/ ".$category->id."/edit ") }}">Editar</a>
               <form action="/categories/{{$category->id}}" method="post">
                 {{ csrf_field() }} {{ method_field("delete") }}
                 <input type="submit" class="btn btn-danger form-control" value="Eliminar">
               </form>
          @endif

     </article>
    @endforeach
  </div>
@endsection
