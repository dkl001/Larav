<!DOCTYPE html>
<html>
<head>
    <title>Modifier le Produit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Modifier le Produit</h1>
        <form action="{{ url('/produits/'.$produit->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" class="form-control" value="{{ $produit->nom }}" required>
            </div>
            <div class="form-group">
                <label for="description">
                Description :</label>
                <textarea id="description" name="description" class="form-control" required>{{ $produit->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="categorie">Catégorie :</label>
                <select id="categorie" name="categorie_id" class="form-control" required>
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}" {{ $produit->categorie_id == $categorie->id ? 'selected' : '' }}>
                            {{ $categorie->nom }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="prix">Prix :</label>
                <input type="number" step="0.01" id="prix" name="prix" class="form-control" value="{{ $produit->prix }}" required>
            </div>
            <div class="form-group">
                <label for="quantiteStock">Quantité Stock :</label>
                <input type="number" id="quantiteStock" name="quantiteStock" class="form-control" value="{{ $produit->quantiteStock }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
</body>
</html>
