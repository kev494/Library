@extends('layout.layout')


@section('content')
    <h1>Books</h1>
    <div>
        <a href={{url('books/create')}} class="btn btn-secondary pull-right"><span class="glyphicon glyphicon-plus"
                                                                          aria-hidden="true"></span>&nbsp;new book</a>
    </div>

    <div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Genres</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr data-href id="{{$book->id}}">
                    <th>{{$book->title}}</th>
                    <th>{{$book->author->name}}</th>
                    <th>
                        @foreach ($book->genre as $genre)
                            {{$genre->genre}}
                        @endforeach
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection