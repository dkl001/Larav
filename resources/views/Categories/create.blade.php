<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une Catégorie</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Ajouter une Catégorie</h1>
        <form action="{{ url('/categories') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
        <a href="{{ url('/categories') }}" class="btn btn-secondary mt-3">Retour aux Catégories</a>
    </div>
</body>
</html>
