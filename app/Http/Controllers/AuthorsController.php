<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors', compact('authors'));
    }

    public function create()
    {
        return view('author');
    }

    public function add(Request $request, Author $author)
    {
        $author->create($request->all());

        return redirect('authors');
    }
}
