@extends('layout.movies')

@section('movies-content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center text-success pb-4">
                <h1 class="fw-bold">Dettagli film</h1>
            </div>
            <div class="col-12 d-flex justify-content-center text-center my-4">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <h2 class="card-title fw-bold">Titolo: {{ $movie['title'] }}</h2>
                        <h4 class="card-subtitle mb-4 text-body-secondary">Titolo originale: {{ $movie['original_title'] }}</h4>
                        <p class="card-text">Nazionalità: {{ $movie['nationality'] }}</p>
                        <p class="card-text">Anno di uscita: {{ $movie['date'] }}</p>
                        <p class="card-text">Voto: {{ $movie['vote'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center my-5">
                <a href="/movies">
                    <button type="button" class="btn px-4 py-3 btn-warning">Ritorna alla lista film</button>
                </a>
            </div>
        </div>
    </div>
@endsection