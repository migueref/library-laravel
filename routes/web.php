<?php

Route::get('/', function () {
    return view('welcome');
});
Route::resource('books', 'Books\BooksController');
Route::resource('authors', 'Authors\AuthorsController');
Route::resource('categories', 'Categories\CategoriesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
