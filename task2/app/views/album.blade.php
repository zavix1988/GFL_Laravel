@extends('layout')

@section('content')
    <div class="container">
        <h1>Album - {{$album}}</h1>
        <h2>Artist - {{$artist->Name}}</h2>
        <div class="row">
            <div class="list-group">
                @foreach($tracks as $track)
                    <a href="{{url('track/'.$track->TrackId)}}" class="list-group-item list-group-item-action">{{$track->Name}}</a>
                @endforeach
            </div>
        </div>
        <a href="{{url('artist/'.$artist->ArtistId)}}" class="btn btn-primary">Go back</a>
    </div>
@stop