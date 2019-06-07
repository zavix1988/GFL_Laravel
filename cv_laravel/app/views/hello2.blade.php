@extends('layout')

@section('content')
    <h1>English, motherfucker. Do you speak it?</h1>
    @if($name)
    <h2>{{ $name }} - мудак</h2>
    @endif

    <form method="POST">
        <label for="input">Input text for post</label>
        <input type="text" name="name" id="input">
        <button type="sublit">send Post</button>
    </form>
@stop

@section('footer')
@parent
    <address>Email:test@mail.loc</address>
    @if($list)
        <ul>
            @foreach($list as $title => $url)
                <li><a href="{{$url}}">{{$title}}</a>
            @endforeach
        </ul>
    @endif
@stop