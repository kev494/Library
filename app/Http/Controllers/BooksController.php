<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $authors = Author::all();
        return view('books.add', compact('authors'));
    }

    public function add(Request $request, Book $book)
    {
        $book->create($request->all());

        return redirect('/');
    }
}
