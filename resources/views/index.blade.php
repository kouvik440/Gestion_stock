<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion de Stock - Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

 
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">📦 Gestion de Stock</a>
        </div>
    </nav>

    <div class="container mt-5 text-center">
        <h1 class="display-5">Bienvenue sur l'application</h1>
        <p class="lead">Gérez vos catégories, articles et mouvements de stock.</p>             
    </div>
    
        <div class="row text-center mt-5">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5>Catégories</h5>
                        <p>Ajouter, modifier et supprimer des catégories.</p>
                        <a href="/categories" class="btn btn-outline-primary">Voir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 mt-md-0">
                <div class="card shadow">
                    <div class="card-body">
                        <h5>Articles</h5>
                        <p>Gérer les articles en stock.</p>
                        <a href="/items" class="btn btn-outline-success">Voir</a>
                    </div>
                </div>
            </div>
        </div>
    

</body>
</html>
