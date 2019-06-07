@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>{{$track->Name}}</h4>
            </div>
            <div class="card-body">
                <h5 class="card-title">Album: {{$album->Title}}</h5>
                <P class="card-text">Artist - {{$artist}}</P>
                <p class="card-text">Composer - {{$track->Composer}}</p>
                <p class="card-text">Genres -
                @foreach($genres as $genre)
                    {{$genre->Name}}&nbsp;
                @endforeach
                </p>
                <a href="{{url('album/'.$album->AlbumId)}}" class="btn btn-primary">Go back</a>
            </div>
        </div>
    </div>
@stop