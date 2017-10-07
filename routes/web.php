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

Route::get('/books', 'BooksController@index');
Route::get('/books/{book}', 'BooksController@show');
Route::get('/books/create', 'BooksController@create');
Route::post('books/create', 'BooksController@add');

Route::get('authors', 'AuthorsController@index');
Route::get('authors/create', 'AuthorsController@create');
Route::post('authors/create', 'AuthorsController@add');