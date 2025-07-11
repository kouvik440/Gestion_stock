<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion de stock</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">🏠 Accueil</a>
            <a class="nav-link text-white" href="{{ route('items.index') }}">📦 Matériels</a>
            <a class="nav-link text-white" href="{{ route('categories.index') }}">📚 Catégories</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
