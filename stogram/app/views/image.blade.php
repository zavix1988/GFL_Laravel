@extends('layout')

@section('content')
<div class="image">
    <img src="{{action('HomeController@getImageFile', $image->id)}}" title="{{$image->name}}" alt="">
    <p>{{$image->description}}</p>
</div>

@if($image->comments)
    @foreach($image->comments as $comment)
        <div class="comment" style="border: 1px solid black; width:200px; margin-bottom: 10px;">
            <div class="comment-head">
                {{$comment->user->name}} <span>{{$comment->created_at}}</span>
            </div>
            <div class="comment-body">
            {{$comment->text}}
            </div>
        </div>
    @endforeach
@endif

<form action="{{action('HomeController@postComment')}}" method="POST">
    <textarea name="text" cols="30" rows="10"></textarea>
    <input type="hidden" name="image_id" value={{$image->id}}><br />
    <button type="submit">Насрать</button>
</form>
@stop