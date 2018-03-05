<?php

namespace App\Http\Controllers\Books;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\Category;
use App\Author;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd("asd");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('books.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $book = new Book;
          $book->title = $request->title;
          $book->category_id = $request->category_id;
          $book->year_of_publication = $request->year_of_publication;
          $book->language = $request->language;
          /**
           * Mover archivo al servidor
           */
          $file = $request->file('file');
          $name = time().'.'.$file->getClientOriginalExtension();
          $path = public_path().'/files/books/';
          $file->move($path,$name);

          $book->file = $name;
          $book->pages = $request->pages;
          $book->description = $request->description;
          /**
           * Mover imagen de portada al servidor
           */
          $cover = $request->file('cover');
          $name = time().'.'.$cover->getClientOriginalExtension();
          $path = public_path().'/files/books/';
          $cover->move($path,$name);
          $book->slug = $name;


          $author = new Author;
          $author->name = $request->author_name;
          $author->lastname = $request->author_lastname;

          if ($book->save() && $author->save()) {
               $book->authors()->attach($author->id);
          }
          echo $book->id;

    }
    public function moveFiles()
    {

    }
    public function saveAuthor()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
