<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genres.index', compact('genres'));
    }

    public function show(Genre $genre)
    {
        return view('genres.show', compact('genre'));
    }

    public function create()
    {
        return view('genres.add');
    }

    public function add(Request $request, Genre $genre)
    {
        $genre->create($request->all());

        return redirect('/genres');
    }

    public function update(Request $request, Genre $genre)
    {
        $genre->update($request->all());

        return redirect()->back();
    }
}
