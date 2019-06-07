@extends('view.layout')

@section('content')
    <h1>Contact Us</h1>
    @if($error)
        заполните форму корректно
    @endif
    <form method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="message">message</label>
            <input type="text" class="form-control" id="message" name="message" placeholder="Enter name">
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
@stop