<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Gestion de stock</title>

    <!-- ✅ Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ✅ Style personnalisé -->
    <style>
        body {
            background-image: url("{{ asset('images/stock-management-pro.jpg') }}");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
        }

        .bg-overlay {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 9rem;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="py-5 text-center bg-overlay shadow-sm mt-4">
            <h1 class="display-4 mb-3">📦 Application de Gestion de Stock</h1>

            <p class="lead">Bienvenue dans votre outil de gestion des matériels et des catégories.</p>

            <div class="mt-4">
                <a href="{{ route('items.index') }}" class="btn btn-primary btn-lg me-2">Voir les matériels</a>
                <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary btn-lg">Voir les catégories</a>
            </div>
        </div>
    </div>

    <!-- ✅ Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
