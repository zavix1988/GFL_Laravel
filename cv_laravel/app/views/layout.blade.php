<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<div id="content">
@yield('content')
</div>
<div id="footer">
@section('footer')
Copyright 2019
@show
</div>
</body>
</html>