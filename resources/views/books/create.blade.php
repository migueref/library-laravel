@extends('layouts.app')

@section('title', 'Registrar libro')
@section('content')
  <form action="{{ url('/books') }}" method="post" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <label for="title">Título del libro</label><br>
    <input type="text" name="title" value=""><br>

    <label for="year_of_publication">Año de publicación</label><br>
    <input type="text" name="year_of_publication" value=""><br>

    <label for="language">Idioma</label><br>
    <input type="text" name="language" value=""><br>

    <label for="file">Archivo PDF del libro</label><br>
    <input type="file" name="file" value=""><br>

    <label for="pages">Número de páginas</label><br>
    <input type="text" name="pages" value=""><br>

    <label for="description">Breve resumen del libro</label><br>
    <textarea name="description" rows="8" cols="80"></textarea> <br>

    <label for="cover">Imagen de portada</label><br>
    <input type="file" name="cover" value=""><br>

    <label for="category_id">Categoría del libro</label><br>
    <select class="" name="category_id">
         @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
         @endforeach
    </select><br>
    <label for="cover">Nombre del autor</label><br>
    <input type="text" name="author_name" value=""><br>

    <label for="cover">Apellido del autor</label><br>
    <input type="text" name="author_lastname" value=""><br>


    <input type="submit" name="" value="Guardar">
  </form>
@endsection
