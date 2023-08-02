@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-center">BoolMovies</h1>
            </div>
            <div class="col-12 mt-4">
                <div class="d-flex justify-content-center">

                    <a href="{{ Route('movies.index') }}" class="btn btn-primary mx-2">Visualizza film</a>
                    <a href="{{ Route('movies.create') }}" class="btn btn-primary mx-2">Aggiungi film</a>

                </div>
            </div>
        </div>
    </div>
@endsection