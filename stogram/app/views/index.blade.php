@extends('layout')

@section('content')
<img src="https://pp.userapi.com/c5919/g30325346/a_f058ac43.jpg?ava=1" alt="">
    <div class="form" style="width: 200px;">
        <form action="{{action('HomeController@postImage')}}" method="POST" enctype="multipart/form-data">
            @if($errors->first('name'))
            <cite>{{$errors->first('name')}}</cite>
            @endif
            <label for="name">Name<input id="name" type="text" name="name"></label>
            @if($errors->first('img'))
            <cite>{{$errors->first('img')}}</cite>
            @endif
            <label for="img">Image<input id="img" type="file" name="img"></label>
            <label for="description">Description: <textarea name="description" id="description" cols="30" rows="10"></textarea></label>
            <button type="submit">To trash</button>
        </form>
    </div>
@stop