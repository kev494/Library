@extends('layout.layout')

@section('content')
    <h1>Authors</h1>
    <div>
        <a href={{url('authors/create')}} class="btn btn-secondary pull-right"><span class="glyphicon glyphicon-plus"
                                                               aria-hidden="true"></span>&nbsp;new author</a>
    </div>
    <div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>

            </tr>
            </thead>
            <tbody>
            @foreach($authors as $author)
                <tr data-href id="{{$author->id}}">
                    <th>{{$author->name}}</th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
