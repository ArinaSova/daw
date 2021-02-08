<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
<div class="container">
    <nav>
        <ol>
            <li>
                <a href="{{ route('index') }}">Acasa</a>
            </li>
            <li>
                <a href="{{ route('contact') }}">Contacte</a>
            </li>
        </ol>
    </nav>
    @yield('content')
</div>
</body>
</html>
