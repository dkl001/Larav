<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une Entrée</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Ajouter une Entrée pour {{ $produit->nom }}</h1>
        <form action="{{ url('/entrees') }}" method="POST">
            @csrf
            <input type="hidden" name="produit_id" value="{{ $produit->id }}">
            <div class="form-group">
                <label for="quantite">Quantité :</label>
                <input type="number" id="quantite" name="quantite" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</body>
</html>
