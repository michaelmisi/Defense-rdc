@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Actualités</h1>
            <a href="{{ route('admin.actualites.create') }}" class="btn btn-primary">Ajouter une actualité</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Catégorie</th>
                                <th>Statut</th>
                                <th>Date de publication</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($actualites as $actualite)
                                <tr>
                                    <td>{{ $actualite->title }}</td>
                                    <td>{{ $actualite->category }}</td>
                                    <td>{{ $actualite->status }}</td>
                                    <td>{{ $actualite->published_at ? $actualite->published_at->format('d/m/Y') : 'N/A' }}</td>
                                    <td>
                                        <a href="{{ route('admin.actualites.show', $actualite) }}" class="btn btn-info btn-sm">Voir</a>
                                        <a href="{{ route('admin.actualites.edit', $actualite) }}" class="btn btn-warning btn-sm">Modifier</a>
                                        <form action="{{ route('admin.actualites.destroy', $actualite) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $actualites->links() }}
            </div>
        </div>
    </div>
@endsection
