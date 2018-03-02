@extends('layout.layout')

@section('content')
    <h2>Add a new genre</h2>
    <form method="post" action="/genres/create">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Genre</label>
            <input type="text" class="form-control" name="genre">
        </div>
        <div>
            <input type="submit" class="btn btn-secondary pull-right" value="Submit">
        </div>

    </form>
@endsection