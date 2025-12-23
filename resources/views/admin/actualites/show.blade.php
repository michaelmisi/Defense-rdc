@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ $actualite->title }}</h1>
            <a href="{{ route('admin.actualites.index') }}" class="btn btn-secondary">Retour à la liste</a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                @if($actualite->image)
                    <img src="{{ asset('storage/' . $actualite->image) }}" alt="{{ $actualite->title }}" class="img-fluid mb-4" style="max-height: 400px;">
                @endif
                <p><strong>Catégorie:</strong> {{ $actualite->category }}</p>
                <p><strong>Statut:</strong> {{ $actualite->status }}</p>
                <p><strong>Date de publication:</strong> {{ $actualite->published_at ? $actualite->published_at->format('d/m/Y') : 'N/A' }}</p>
                <hr>
                <div>
                    {!! $actualite->content !!}
                </div>
                <hr>
                <a href="{{ route('admin.actualites.edit', $actualite) }}" class="btn btn-warning">Modifier</a>
            </div>
        </div>
    </div>
@endsection
