@extends('layouts.home')
@section('title', $book->titlul )

@section('content')
    <h5 class="text-center py-3">Editati cartea: {{ $book->titlul }}</h5>
    <div class="row">
        <form action="{{ route('books.update', $book->id) }}" method="post" class="col-md-6 m-auto bg-light p-3">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="">Titlul</label>
                <input type="text" class="form-control" name="titlul" value="{{ $book->titlul }}">
            </div>
            <div class="mb-3">
                <label for="">Autor</label>
                <input type="text" name="autor" class="form-control" value="{{ $book->autor }}">
            </div>
            <div class="mb-3">
                <label for="">Pret</label>
                <input type="number" name="pret" class="form-control" step="0.01" value="{{ $book->pret }}">
            </div>
            <div class="mb-3">
                <label for="">Descriere</label>
                <textarea name="descriere" rows="3" class="form-control">{{ $book->descriere }}</textarea>
            </div>
            <div class="mb-3">
                <label for="">Pagini</label>
                <input type="number" name="pagini" class="form-control" value="{{ $book->pagini }}">
            </div>
            <div class="mb-3">
                <label for="">Limba</label>
                <input type="text" name="limba" class="form-control" value="{{ $book->limba }}">
            </div>
            <div class="mb-3">
                <input type="submit" value="Save" class="form-control">
            </div>
        </form>
    </div>
@endsection
