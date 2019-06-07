@extends('layout')

@section('content')
    <h1>English, motherfucker. Do you speak it?</h1>
    

    
    <form action="submit" method="POST">
        <label for="input">Input text for post</label>
        <input type="text" name="name" id="input">
        <button type="sublit">send Post</button>
    </form>
@stop
