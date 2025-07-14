@extends('layouts.app')

@section('title', '📚 Liste des catégories')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">📚 Liste des catégories</h2>
        <a href="{{ route('categories.create') }}" class="btn btn-success">
            ➕ Ajouter une catégorie
        </a>
    </div>

    {{-- Message de succès --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
        </div>
    @endif

    {{-- Tableau des catégories --}}
    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">📁 Nom</th>
                    <th scope="col">📝 Description</th>
                    <th scope="col" class="text-center">⚙️ Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $cat)
                    <tr>
                        <td>{{ $cat->nom }}</td>
                        <td>{{ $cat->description }}</td>
                        <td class="text-center">
                            <a href="{{ route('categories.edit', $cat->id) }}" class="btn btn-sm btn-warning me-1">
                                ✏️ Modifier
                            </a>
                            <form action="{{ route('categories.destroy', $cat->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Confirmer la suppression ?')">
                                    🗑️ Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center text-muted">Aucune catégorie enregistrée.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="mt-3">
        {{ $categories->links() }}
    </div>

</div>
@endsection
