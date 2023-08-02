@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Create Film</h1>
            </div>
        </div>
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-6">
            <form action=" {{ Route('movies.store') }} " method="POST">
                    @csrf
                    <div class="form-group border p-4">
                        <div class="row">
                            <div class="col-12 my-3">
                                <label class="control-label my-3">Titolo</label>
                                <input type="text" name="name" id="name" placeholder="Inserisci il titolo" class="form-control" value="{{ old('name') }}">
                            </div>
                            <div class="col-12 my-3">
                                <label class="control-label my-3">Immagine</label>
                                @if($movie->img != NULL || $movie->img != '')
                                    <div class="col-1">   <img src="{{$movie->img}}" class="img-fluid"></div>
                                @endif
                                    <input type="text" name="img" id="img" placeholder="Inserisci la img" class="form-control" value="{{ old('img') }}">
                            </div>
                            </div>
                            <div class="col-12 my-3">
                                <label class="control-label my-3">Genere</label>
                                <input type="text" name="genre" id="genre" placeholder="Inserisci il genere" class="form-control" value="{{ old('genre') }}">
                            </div>
                            <div class="col-12 my-3">
                                <label class="control-label my-3">Voto</label>
                                <input type="text" name="vote" id="vote" placeholder="Inserisci il Voto" class="form-control" value="{{ old('vote') }}">
                            </div>
                            <div class="col-12 my-3">
                                <label class="control-label my-3">Seleziona lingua</label>
                                <select class="form-control" name="original_language" id="original_language">
                                    <option value="" disabled>Seleziona Lingua</option>
                                    <option value="Inglese" @selected(old('original_language') == 'Inglese')>Inglese</option>
                                    <option value="Francese" @selected(old('original_language') == 'Francese')>Francese</option>
                                    <option value="Tedesco" @selected(old('original_language') == 'Tedesco')>Tedesco</option>
                                </select>
                            </div>
                            <div class="col-12 my-3">
                                <label class="control-label my-3">Lunghezza film</label>
                                <input type="text" name="length" id="length" placeholder="Inserisci la lunghezza" class="form-control" value="{{ old('length') }}">
                            </div>
                            <div class="col-12 text-center my-5">
                                <button type="submit" class="btn btn-success">Aggiungi</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection