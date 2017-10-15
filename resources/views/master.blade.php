<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Name - @yield('title')</title>
</head>
<body>
    <div style="float: left;">
    @section('sidebar')
    <ul>
    <li>About us</li>
    <li>Contact us</li>
    <li>Reach us</li>
    <li>Customer Care</li>
    </ul>
    @show
    </div>
    <div style="float: left;">
        @yield('content')
    </div>
</body>
</html>