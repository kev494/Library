@extends('layout.layout')

@section('content')
    <h3>{{$genre->genre}}</h3>
    <div class="form-group">
        <form method="post" action="/genres/{{$genre->id}}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label>Genre Name</label>
                <input type="text" class="form-control" name="genre" value="{{$genre->genre}}">
            </div>
            <div>
                <input type="submit" class="btn btn-secondary pull-right" value="Submit">
            </div>
        </form>
    </div>

@endsection