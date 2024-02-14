@extends('layout.movies')

@section('movies-content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center text-success pb-4">
                <h1 class="fw-bold">I FILM DEL MOMENTO</h1>
                <h6>(Questa lista è indipendente e stilata da BoolData Movies, non arrabbiatevi come babbuini se non vi piace)</h6>
            </div>
            <div class="col-12 text-center text-danger">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                           <th>ID</th>
                           <th>Titolo</th>
                           <th>Titolo Originale</th>
                           <th>Nazionalità</th>
                           <th>Data di uscita</th>
                           <th>Voto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movie)
                            <tr>
                                <td>{{ $movie['id'] }}</td>
                                <td>{{ $movie['title'] }}</td>
                                <td>{{ $movie['original_title'] }}</td>
                                <td>{{ $movie['nationality'] }}</td>
                                <td>{{ $movie['date'] }}</td>
                                <td class="table-success">{{ $movie['vote'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection