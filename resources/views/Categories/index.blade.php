<!DOCTYPE html>
<html>
<head>
    <title>Liste des Catégories</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mt-5 mb-3">
            <h1>Liste des Catégories</h1>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Déconnexion</button>
            </form>
        </div>
        <div class="mb-3">
            <a href="{{ url('/categories/create') }}" class="btn btn-primary">Ajouter une Catégorie</a>
            <a href="{{ url('/produits') }}" class="btn btn-secondary">Retour aux Produits</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $categorie)
                    <tr>
                        <td>{{ $categorie->nom }}</td>
                        <td>{{ $categorie->description }}</td>
                        <td>
                            <a href="{{ url('/categories/'.$categorie->id.'/edit') }}" class="btn btn-warning btn-sm">Modifier</a>
                            <form action="{{ url('/categories/'.$categorie->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ url('/categories/create') }}">Ajouter une Catégorie</a>
    <br>
    <a href="{{ url('/produits') }}">Retour aux Produits</a><br>
</body>
</html>
