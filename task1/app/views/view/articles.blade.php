@extends('view.layout')

@section('content')
<div class="list-group">
    @foreach($articles as $num => $article)
        <a href="article/{{$num + 1}}" class="list-group-item list-group-item-action">{{$article}}</a>
    @endforeach
</div>
@stop