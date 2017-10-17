@extends('layout.layout')

@section('content')
    <h2>Edit {{$author->id}}</h2>
    <form method="post" action="/authors/{author}/edit">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{$author->name}}">
        </div>
        <div>
            <input type="submit" class="btn btn-secondary pull-right" value="Submit">
        </div>

    </form>
@endsection