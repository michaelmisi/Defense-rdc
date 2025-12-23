@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Modifier une actualité</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('admin.actualites.update', $actualite) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $actualite->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="content">Contenu</label>
                        <textarea name="content" id="content" class="form-control" rows="5" required>{{ $actualite->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Catégorie</label>
                        <input type="text" name="category" id="category" class="form-control" value="{{ $actualite->category }}" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Statut</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="draft" {{ $actualite->status == 'draft' ? 'selected' : '' }}>Brouillon</option>
                            <option value="published" {{ $actualite->status == 'published' ? 'selected' : '' }}>Publié</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="published_at">Date de publication</label>
                        <input type="date" name="published_at" id="published_at" class="form-control" value="{{ $actualite->published_at ? $actualite->published_at->format('Y-m-d') : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                        @if($actualite->image)
                            <img src="{{ asset('storage/' . $actualite->image) }}" alt="{{ $actualite->title }}" class="img-fluid mt-2" style="max-height: 150px;">
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
                </form>
            </div>
        </div>
    </div>
@endsection
