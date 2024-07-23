<!DOCTYPE html>
<html>
<head>
    <title>Liste des Entrées</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Liste des Entrées</h1>
    <ul>
        @foreach ($entrees as $entree)
            <li>{{ $entree->produit->nom }} - Quantité : {{ $entree->quantite }}</li>
        @endforeach
    </ul>
    <a href="{{ url('/entrees/create') }}">Ajouter une Entrée</a>
</body>
</html>
