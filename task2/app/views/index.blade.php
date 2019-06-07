@extends('layout')

@section('content')
    <div class="container">
        <h1>Artists</h1>
        <div class="row">
            <div class="list-group">
                @foreach($artists as $artist)
                    <a href="{{url('artist/'.$artist->ArtistId)}}" class="list-group-item list-group-item-action">{{$artist->Name}}</a>
                @endforeach
                <div>{{$artists->links()}}</div>
            </div>
        </div>
    </div>
@stop