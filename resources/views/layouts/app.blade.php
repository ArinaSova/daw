<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<nav class="nav bg bg-light">
    <a class="nav-link active" aria-current="page" href="{{route('index')}}">Acasa</a>
    <a class="nav-link" href="{{ route('imagine.index' )}}">Imagini</a>
    <a class="nav-link" href="{{route('product.index')}}">Produse</a>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>

