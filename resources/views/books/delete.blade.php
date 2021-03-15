@extends('layouts.home')
@section('title', 'Stergere')
@section('content')
    <div class="row pt-5">
        <div class="col-md-3 m-auto border p-3">
            <h4 class="text-danger">Esti sigur ca doresti sa stergi aceasta carte?</h4>
            <form action="{{ route('books.destroy', $deleteBook) }}" method="post">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger" type="submit" value="Da">
            </form>
            <a href="{{ route('books.index') }}" class="btn btn-info">Nu</a>
        </div>
    </div>
@endsection
