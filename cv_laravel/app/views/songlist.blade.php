@extends('layout')

@section('content')
    <ol>
        @foreach($artists as $artist)
        <li>{{$artist->Name}}</li>
        @endforeach
    </ol>
@stop