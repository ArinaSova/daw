<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <p class="text-white bg-danger">{{session('success')}}</p>
                <form action="{{route('pasager.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nume</label>
                        <input type="text" name="nume" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Prenume</label>
                        <input type="text" name="prenume" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Destinatie</label>
                        <input type="text" name="destinatie" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-success" value="Salvare">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
