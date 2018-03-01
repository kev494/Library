<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('books', 'BooksController@index');
Route::get('books/create', 'BooksController@create');
Route::post('books/create', 'BooksController@add');
Route::get('books/{book}', 'BooksController@show');


Route::get('authors', 'AuthorsController@index');
Route::get('authors/create', 'AuthorsController@create');
Route::post('authors/create', 'AuthorsController@add');
Route::get('authors/{author}', 'AuthorsController@show');
Route::get('authors/{author}/edit', 'AuthorsController@edit');
Route::patch('authors/{author}/edit', 'AuthorsController@update');


Route::get('genres', 'GenreController@index');
Route::get('genres/create', 'GenreController@create');
Route::post('genres/create', 'GenreController@add');
Route::get('genres/{genre}', 'GenreController@show');