@extends('layout')

@section('content')
<h1>Sign Up bldjad</h1>
<form method="POST" style="width: 200px;">
    <label for="name">Name: <input type="text" name="name" id="name"></label><br>
    <label for="email">Email: <input type="text" name="email" id="email"></label><br>
    <label for="password">Password: <input type="password" name="password" id="password"></label><br>
    <label for="confirm">Retype password: <input type="password" name="password_confirmation" id="confirm"></label><br>
    <button type=submit>Sign Up</button>
</form>
@stop