@extends('layouts.app')

@section('title','Categories')
@section('content')
    @forelse($imagines as $imagine)

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$imagine->imagine}}</h5>
            </div>
        </div>
    @empty
    @endforelse
@endsection

