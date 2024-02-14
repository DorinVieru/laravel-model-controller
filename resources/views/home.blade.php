@extends('layout.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center text-success pb-4">
                <h3 class="fw-bold">Scopri i film più visti del momento secondo il metodo BoolData Movies</h3>
                <a href="{{ route('index_movies') }}" class="btn btn-warning fw-bold py-3 px-4 my-4">Visualizza i Film</a>
            </div>
        </div>
    </div>
@endsection