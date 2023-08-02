@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row info_comic">
        <div class="col-6 col-md-4 ">
            <img class="img-fluid" src="{{ $movie->img }}" alt="">
        </div>
        <div class="col-12 col-md-8 text-white">
            <h1>{{ $movie->name }}</h1>
            <div>Voto: <span class="text-success fw-semibold">${{ $movie->vote }}</span></div>
            <div>Durata: {{$movie->length}}</div>
            <div>Genere: {{$movie->genre}}</div>
            <div class="mt-5 text-center">
                <a href="{{route('home')}}" class="btn btn-outline-light "  role="button" aria-disabled="true">Torna alla Home</a>
                <a class="btn btn-outline-light" href="{{route('movies.index')}}">Vai al DB !</a>
            </div>
        </div>
    </div>
</div>

@endsection