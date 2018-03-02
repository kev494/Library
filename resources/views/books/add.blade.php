@extends('layout.layout')

@section('content')
    <h2>Add a new book</h2>
    <form method="post" action="/books/create">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label>Summary</label>
            <textarea class="form-control" rows="4" name="summary"></textarea>
        </div>
        <div class="form-group">
            <label>Author</label>
            <select class="form-control" name="author_id">
                @foreach($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            @foreach($genres as $genre)
                <label class="checkbox-inline"><input type="checkbox" name="genres[]" value={{$genre->id}}>{{$genre->genre}}</label>
            @endforeach
        </div>
        <div>
            <input type="submit" class="btn btn-secondary pull-right" value="Submit">
        </div>

    </form>
@endsection