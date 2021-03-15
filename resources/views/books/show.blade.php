@extends('layouts.home')
@section('title', $book->titlul )

@section('content')
    <div class="row  mt-4">
        <ol class="list-group col-md-6 m-auto">
            <li class="list-group-item">{{$book->titlul}}</li>
            <li class="list-group-item">{{$book->autor}}</li>
            <li class="list-group-item">{{$book->pret}}</li>
            <li class="list-group-item">{{$book->descriere}}</li>
            <li class="list-group-item">{{$book->pagini}}</li>
            <li class="list-group-item">{{$book->limba}}</li>
            <li class="list-group-item">{{$book->created_at->diffForHumans()}}</li>
        </ol>
    </div>
    <div class="row">
        <a class="btn btn-info btn-sm" href="{{ route('books.index') }}">Back</a>
    </div>
@endsection
