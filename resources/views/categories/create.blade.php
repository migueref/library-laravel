@extends('layouts.app')

@section('title', 'Crear categoria')
@section('content')
  <form action="/categories" method="post">
    {{ csrf_field() }}
    <label for="name">Nombre de la categoría</label><br>
    <input type="text" name="name" value=""><br>
    <label for="description">Descripción de la categoría</label><br>
    <textarea name="description" rows="8" cols="80"></textarea><br>
    <input type="submit" name="" value="Guardar">
  </form>
@endsection
