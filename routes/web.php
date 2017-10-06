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

Route::get('/', 'BooksController@index');
Route::get('/book/create', 'BooksController@create');
Route::post('book/create', 'BooksController@add');

Route::get('authors', 'AuthorsController@index');
Route::get('author/create', 'AuthorsController@create');
Route::post('author/create', 'AuthorsController@add');