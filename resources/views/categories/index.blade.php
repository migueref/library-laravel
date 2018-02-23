@extends('layouts.app')
@section("title","Lista de categorias")
@section("content")
  <div class='row'>
    @foreach($categories as $categoria)
      <div class="card mr-3 col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card-body">
          <h5 class="card-title">{{$categoria->name}}</h5>
          <p class="card-text">{{$categoria->description}}</p>
        </div>
      </div>
    @endforeach
  </div>
@endsection
