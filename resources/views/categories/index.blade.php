@extends('layouts.app')
@section("title","Lista de categorias")
@section("content")
  <div class='row'>
    @foreach($categories as $category)
      <div class="card mr-3 col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card-body">
          <h5 class="card-title">{{$category->name}}</h5>
          <p class="card-text">{{$category->description}}</p>
          <a href="{{ url("/categories/ ".$category->id."/edit ") }}" class="btn btn-warning form-control">Modificar</a>
          <form action="/categories/{{$category->id}}" method="post">
            {{ csrf_field() }} {{ method_field("delete") }}
            <input type="submit" class="btn btn-danger form-control" value="Eliminar">
          </form>
        </div>
      </div>
    @endforeach
  </div>
@endsection
