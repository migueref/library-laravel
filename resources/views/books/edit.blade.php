@extends('layouts.app')

@section('title', 'Editar categoria')
@section('content')
  <form action="/categories/{{$category->id}}" method="post">
    {{ csrf_field() }}
    {{ method_field("PUT") }}
    <label for="name">Nombre de la categoría</label><br>
    <input type="text" name="name" value="{{ $category->name }}"><br>
    <label for="description">Descripción de la categoría</label><br>
    <textarea name="description" rows="8" cols="80">
      {{ $category->description }}
    </textarea><br>
    <input type="submit" name="" value="Guardar">
  </form>
@endsection
