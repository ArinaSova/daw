@extends('layouts.home')

@section('title', 'Insert Book')

@section('content')
    <h5 class="mt-4 text-center py-3">Insert Book</h5>
    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="row">
        <form action="{{ route('books.store') }}" method="post" class="col-md-6 m-auto bg-light p-3">
            @csrf
            <div class="mb-3">
                <label for="">Titlul</label>
                <input type="text" class="form-control" name="titlul">
            </div>
            <div class="mb-3">
                <label for="">Autor</label>
                <input type="text" name="autor" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Pret</label>
                <input type="number" name="pret" class="form-control" step="0.01">
            </div>
            <div class="mb-3">
                <label for="">Descriere</label>
                <textarea name="descriere" rows="3" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="">Pagini</label>
                <input type="number" name="pagini" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Limba</label>
                <input type="text" name="limba" class="form-control">
            </div>
            <div class="mb-3">
                <input type="submit" value="Save" class="form-control">
            </div>
        </form>
    </div>
@endsection
