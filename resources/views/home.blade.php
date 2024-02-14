@extends('layout.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center text-success pb-4">
                <h3 class="fw-bold">Scopri i film più visti del momento secondo il metodo BoolData Movies</h3>
                <a href="{{ route('index_movies') }}" class="btn btn-warning fw-bold py-3 px-4 my-4">Visualizza i Film</a>
            </div>
            {{-- <div class="col-12 text-center text-danger">
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
            </div> --}}
        </div>
    </div>
@endsection