@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>MY MOVIES</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-3">
            <a href="{{ route('movies.create') }}" class="btn btn-primary btn-sm">Create your Movies</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table mb-5 z-3 position-relative">
                <thead>
                    <tr class="text-primary">
                        <th>ID</th>
                        <th>NAME</th>
                        <th>IMG</th>
                        <th>GENERE</th>
                        <th>VOTE</th>
                        <th>ORIGINAL LANGUAGE</th>
                        <th>LENGTH</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($movies as $movie)
                    <tr>
                        <td> {{ $movie->id }} </td>
                        <td> {{ $movie->name }} </td>
                        <td> {{ $movie->img }} </td>
                        <td> {{ $movie->genre }} </td>
                        <td> {{ $movie->vote }} </td>
                        <td> {{ $movie->original_language }} </td>
                        <td> {{ $movie->length }} </td>
                        <td>
                            <a href=" {{ route('movies.show', $movie->id) }} " class="btn btn-info btn-sm"><i class="fa-solid fa-circle-info"></i></a>
                            <a href=" {{ route('movies.edit', $movie->id) }} " class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('movies.destroy', $movie->id)}}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare l\'oggetto?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection