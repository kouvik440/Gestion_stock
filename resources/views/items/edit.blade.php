@extends('layouts.app')

@section('title', 'Modifier un matériel')

@section('content')
<div class="container">
    <h2>✏️ Modifier le matériel</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $erreur)
                    <li>{{ $erreur }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" value="{{ $item->nom }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="reference" class="form-label">Référence</label>
            <input type="text" name="reference" value="{{ $item->reference }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Catégorie</label>
            <select name="category_id" class="form-select" required>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ $cat->id == $item->category_id ? 'selected' : '' }}>
                        {{ $cat->nom }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="quantite" class="form-label">Quantité</label>
            <input type="number" name="quantite" value="{{ $item->quantite }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="statut" class="form-label">Statut</label>
            <select name="statut" class="form-select">
                <option value="Disponible" {{ $item->statut == 'Disponible' ? 'selected' : '' }}>Disponible</option>
                <option value="Indisponible" {{ $item->statut == 'Indisponible' ? 'selected' : '' }}>Indisponible</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">💾 Enregistrer</button>
        <a href="{{ route('items.index') }}" class="btn btn-secondary">↩️ Retour</a>
    </form>
</div>
@endsection
