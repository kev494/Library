@extends('layout.layout')

@section('content')
    <h3>{{$author->name}}</h3>
    <div>
        <a href={{url('authors/'. $author->id .'/edit')}} class="btn btn-secondary pull-right"><span class="glyphicon glyphicon-pencil"
                                                                                     aria-hidden="true"></span>&nbsp;edit author</a>
    </div>
    <div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Buch Titel</th>
                <th>Genre</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <th>{{$book->title}}</th>
                    <th></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection