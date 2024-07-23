<!DOCTYPE html>
<html>
<head>
    <title>Liste des Sorties</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Liste des Sorties</h1>
    <ul>
        @foreach ($sorties as $sortie)
            <li>{{ $sortie->produit->nom }} - Quantité : {{ $sortie->quantite }}</li>
        @endforeach
    </ul>
    <a href="{{ url('/sorties/create') }}">Ajouter une Sortie</a>
</body>
</html>
