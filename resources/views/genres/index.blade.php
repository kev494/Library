@extends('layout.layout')

@section('content')
    <script language="JavaScript" type="text/javascript">
        $(function(){
            $('.table tr[data-href]').each(function(){
                $(this).css('cursor','pointer').click( function(){
                        window.location.href += '/'+$(this).attr('id');
                    }
                );
            });
        });
    </script>
    <h1>Genres</h1>
    <div>
        <a href={{url('genres/create')}} class="btn btn-secondary pull-right"><span class="glyphicon glyphicon-plus"
                                                               aria-hidden="true"></span>&nbsp;new genre</a>
    </div>
    <div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Genre</th>

            </tr>
            </thead>
            <tbody>
            @foreach($genres as $genre)
                <tr data-href id="{{$genre->id}}">
                    <th>{{$genre->genre}}</th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
