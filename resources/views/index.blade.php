@extends('layouts.app')

@section('title', 'La Mia Collezione di Film 🎬')

@section('content')
<h1 class="text-center mb-5 text-primary fw-bold">La Mia Collezione di Film</h1>

<div class="row g-4 mb-5">
    @foreach ($movies as $movie)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-header bg-primary text-white text-center fw-bold">
                    FILM #{{ $movie->id }}
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title text-dark fw-bold mb-2">{{ $movie->title }}</h5>
                    <h6 class="text-muted fst-italic mb-3">{{ $movie->original_title }}</h6>
                    <span class="badge bg-info text-dark mb-2">{{ $movie->nationality }}</span>
                    <p class="mb-1"><strong>Data:</strong> {{ $movie->date }}</p>
                    <p><strong>Voto:</strong> ⭐ {{ $movie->vote }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
