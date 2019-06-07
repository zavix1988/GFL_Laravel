@extends('layout')

@section('content')
    <div class="container">
        <h1>Artist - {{$name}}</h1>
        <div class="row">
            <div class="list-group">
                @foreach($albums as $album)
                    <a href="{{url('album/'.$album->AlbumId)}}" class="list-group-item list-group-item-action">{{$album->Title}}</a>
                @endforeach
            </div>
        </div>
        <a href="{{url('/')}}" class="btn btn-primary">Go back</a>
    </div>
@stop