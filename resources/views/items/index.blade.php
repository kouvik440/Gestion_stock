 @extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    
        <h1>Liste des matériels</h1>

        <a href="{{ route('items.create') }}" class="btn btn-primary">Ajouter un matériel</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Référence</th>
                <th>Catégorie</th>
                <th>Quantité</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item->nom }}</td>
                <td>{{ $item->reference }}</td>
                <td>{{ $item->category->nom ?? 'Non défini' }}</td>
                <td>{{ $item->quantite }}</td>
                <td>{{ $item->statut }}</td>
                <td>
                    <a href="{{ route('items.edit', $item->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                    
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Confirmer la suppression ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $items->links() }} <!-- Pagination -->
    @endsection
</body>
</html>