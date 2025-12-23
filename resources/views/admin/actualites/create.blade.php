@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Ajouter une actualité</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('admin.actualites.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="content">Contenu</label>
                        <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Catégorie</label>
                        <input type="text" name="category" id="category" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Statut</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="draft">Brouillon</option>
                            <option value="published">Publié</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="published_at">Date de publication</label>
                        <input type="date" name="published_at" id="published_at" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Créer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
