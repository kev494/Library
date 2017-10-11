@extends('layout.layout')

@section('content')
    <h2>Add a new author</h2>
    <form method="post" action="/authors/create">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div>
            <input type="submit" class="btn btn-secondary pull-right" value="Submit">
        </div>

    </form>
@endsection