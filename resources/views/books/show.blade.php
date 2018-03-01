@extends('layout.layout')

@section('content')
    <h3>{{$book->title}}</h3>
    <div class="form-group">
        <form method="post" action="/books/{{$book->id}}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="{{$book->title}}">
            </div>
            <div class="form-group">
                <label>Summary</label>
                <textarea class="form-control" rows="4" name="summary"></textarea>
            </div>
            <div class="form-group">
                <label>Author</label>
                <select class="form-control" name="author_id">
                    @foreach($authors as $author)
                        <option value="{{$author->id}}" {{($author->id == $book->author_id ? 'selected="selected"':'')}}>{{$author->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                @foreach($genres as $genre)
                    <!--<label class="checkbox-inline"><input type="checkbox" name="genres[]">{{$genre->genre}}</label>-->
                    {{ Form::checkbox('genre[]', $genre->id) }}
                    <!--Form::checkbox('genre[]', $genre->id, is_null($book->genre->find($genre->id))}}-->
                    {{ Form::label('genre', $genre->genre) }}
                @endforeach
            </div>
            <div>
                <input type="submit" class="btn btn-secondary pull-right" value="Submit">
            </div>
        </form>
    </div>
@endsection