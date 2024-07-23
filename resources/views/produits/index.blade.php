<!DOCTYPE html>
<html>
<head>
    <title>Liste des Produits</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .container {
            margin-top: 50px;
        }
        .btn-group .btn {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Liste des Produits</h1>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Déconnexion</button>
            </form>
        </div>
        <div class="mb-3">
            <a href="{{ url('/produits/create') }}" class="btn btn-primary">Ajouter un Produit</a>
            <a href="{{ url('/categories') }}" class="btn btn-secondary">Gérer les Catégories</a>
        </div>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Catégorie</th>
                    <th>Prix</th>
                    <th>Quantité Stock</th>
                    <th>Disponible</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produits as $produit)
                    <tr>
                        <td>{{ $produit->nom }}</td>
                        <td>{{ $produit->description }}</td>
                        <td>{{ $produit->categorie->nom }}</td>
                        <td>{{ $produit->prix }}</td>
                        <td>{{ $produit->quantiteStock }}</td>
                        <td>{{ $produit->quantiteStock > 0 ? 'Oui' : 'Non' }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ url('/produits/'.$produit->id.'/edit') }}" class="btn btn-warning btn-sm">Modifier</a>
                                <a href="{{ url('/entrees/'.$produit->id.'/create') }}" class="btn btn-success btn-sm">Ajouter une Entrée</a>
                                <a href="{{ url('/sorties/'.$produit->id.'/create') }}" class="btn btn-info btn-sm">Ajouter une Sortie</a>
                                <form action="{{ url('/produits/'.$produit->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
