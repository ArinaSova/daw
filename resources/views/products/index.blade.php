@extends('layouts.app')

@section('title','Products')

@section('content')
    <div class="row">
        <div class="col-md-6 m-auto">
            @forelse($products as $product)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Denumire: {{$product->nume}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Producator: {{$product->producator}}</h6>
                        <p class="card-text">Pret: {{$product->pret}} lei</p>
                        <p class="card-text">Cantitate: {{$product->cantitatea}}</p>
                        <p class="card-text">Nota: {{$product->nota}}</p>
{{--                        <p class="card-text">{{$product->imagine}}</p>--}}
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 m-auto">
            <form action="{{route('product.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-9 m-auto">
                        <div class="form-group">
                            <label>Nume:</label>
                            <input type="text" name="nume" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-9 m-auto">
                        <div class="form-group">
                            <label>Producator:</label>
                            <input type="text" name="producator" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-9 m-auto">
                        <div class="form-group">
                            <label>Pret:</label>
                            <input type="number" name="pret" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-9 m-auto">
                        <div class="form-group">
                            <label>Cantitate:</label>
                            <input type="number" name="cantitatea" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-9 m-auto">
                        <div class="form-group">
                            <label>Nota:</label>
                            <input type="number" name="nota" min="1" max="5" class="form-control">
                        </div>
                    </div>
     <div class="col-md-9 m-auto">
                            <div class="form-group">
                                <label>Imagine:</label>
                                <input type="file" name="imagine" >
                            </div>
                        </div>

                    <div class="form-group">
                        <input type="submit" value="Save" class="form-control btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
