<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StoGram</title>
</head>
<body>
    <div id="header">
    @if(Auth::check())
        <p>Чё каво {{Auth::user()->name}}&nbsp;<a href="{{action('AuthController@logout')}}">R.I.P.</a></p>
    @else
        <p><a href="{{action('AuthController@showLoginForm')}}">Zaloginsja</a> or <a href="{{action('AuthController@showSignupForm')}}">Zaregajsja</a></p>
    @endif
    </div>
    <div id="content">
    @yield('content')
    </div>
</body>
</html>