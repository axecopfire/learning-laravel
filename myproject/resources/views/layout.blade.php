<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laracasts')</title>
</head>
<body>


    <ul>
        <li><a href="/">Home page</a></li>
        <li><a href="/contact">Contact us to learn more</a></li>
        <li><a href="/about">The About us Page</a></li>
    </ul>

    @yield('content')
           
</body>
</html>