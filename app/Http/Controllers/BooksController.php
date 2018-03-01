<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    public function show(Book $book)
    {
        $authors = Author::all();
        $genres = Genre::all();
        return view('books.show', compact('book', 'authors', 'genres'));
    }

    public function create()
    {
        $authors = Author::all();
        $genres = Genre::all();
        return view('books.add', compact('authors', 'genres'));
    }

    public function add(Request $request, Book $book)
    {
        $genres = Input::get('genres');

        $book->create($request->all());
        $book = Book::orderBy('created_at', 'desc')->first();
        foreach ($genres as $genre){
            DB::table('genres_books')->insert(
                ['book_id' => $book->id , 'genre_id' => $genre]
            );
        }

        return redirect('/books');
    }
}
