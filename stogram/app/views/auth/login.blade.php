@extends('layout')

@section('content')
<h1>Log In bldjad</h1>
<form method="POST" style="width: 200px;">
    <label for="email">Email: <input type="text" name="email" id="email"></label><br>
    <label for="password">Password: <input type="password" name="password" id="password"></label><br>
    <button type=submit>Log In</button>
</form>
@stop