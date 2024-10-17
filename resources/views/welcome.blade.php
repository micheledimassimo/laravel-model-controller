@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

<h1>
    Movies
</h1>

<div class="row">
    <div class="col-3">
        @foreach ($movies as $movie) 
            <div class="card" >
                <div class="card-body">
                    <h4 class="card-title">{{ $movie }}</h4>
                    <p class="card-text">original title</p>
                    <p class="card-text">nationality</p>
                    <p class="card-text">date</p>
                    <p class="card-text">vote</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
