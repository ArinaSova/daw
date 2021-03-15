@extends('layouts.home')

@section('title', 'List Books')

@section('content')
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if($books->count() > 0)
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titlul</th>
                    <th>Autor</th>
                    <th>Pret</th>
                    <th>Descriere</th>
                    <th>Pagini</th>
                    <th>Limba</th>
                    <th>Optiuni</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $books as $book )
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->titlul }}</td>
                        <td>{{ $book->autor }}</td>
                        <td>{{ $book->pret }}</td>
                        <td>{{ $book->descriere }}</td>
                        <td>{{ $book->pagini }}</td>
                        <td>{{ $book->limba }}</td>
                        <td>
                            <a class="text-warning" href="{{ route('books.edit', $book->id) }}">Edit</a>
                            <a class="text-info" href="{{ route('books.show', $book->id) }}">View</a>
                            <a class="text-danger" href="{{ route('books.delete', $book->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-danger mt-4">Nu exista date!</p>
    @endif
@endsection
